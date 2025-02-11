<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function recuperarToDos(): JsonResponse
    {
        $todos = Todo::all();
        return response()->json($todos);
    }

    public function criarToDo(Request $request)
    {
        $validated = $request->validate([
            'descricao' => 'required|string|max:255',
            'prazo' => 'required|date',
            'status' => 'required|boolean',
        ]);

        $todo = Todo::create([
            'descricao' => $validated['descricao'],
            'prazo' => $validated['prazo'],
            'status' => $validated['status'],
        ]);

        return response()->json($todo, 201);
    }

    public function attToDo(Request $request, $id)
    {
        $todo = Todo::find($id);

        // Verifica se o to-do existe
        if (!$todo) {
            return response()->json(['message' => 'To-do não encontrado'], 404);
        }

        // Validação
        $validated = $request->validate([
            'descricao' => 'required|string|max:255',
            'prazo' => 'nullable|date',
            'status' => 'required|boolean',
        ]);

        // Atualiza dados
        $todo->descricao = $validated['descricao'];
        $todo->prazo = $validated['prazo'];
        $todo->status = $validated['status'];
        $todo->save();

        return response()->json($todo, 200);
    }

    public function removeToDo($id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            return response()->json(['message' => 'To-Do não encontrado'], 404);
        }

        $todo->delete();

        return response()->json(['message' => 'To-Do removido com sucesso']);
    }
}
