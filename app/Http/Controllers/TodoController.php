<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(): JsonResponse
    {
        $todos = Todo::all(); 
        return response()->json($todos);
    }

    public function store(Request $request)
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
}