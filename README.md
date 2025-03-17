# 📝 To-Do List API & Frontend  

Este é um projeto de **To-Do List** desenvolvido utilizando **Laravel (PHP) no backend** e **Angular no frontend**. O principal objetivo do projeto foi explorar a criação e consumo de **APIs** e a separação entre backend e frontend.  

## 🚀 Tecnologias Utilizadas  

### 🔹 Backend  
- **Laravel** (PHP) - Framework para criação da API  
- **MySQL** - Banco de dados para armazenar as tarefas  
- **Postman** - Testes das requisições da API  

### 🔹 Frontend  
- **Angular** - Framework frontend para consumir a API  
- **Tailwind CSS** - Estilização da aplicação  

## 📌 Funcionalidades  

- Criar, listar, atualizar e excluir tarefas  
- Marcar tarefas como concluídas  
- Separação entre tarefas pendentes e concluídas  
- Persistência dos dados no banco de dados  

## 🌐 Rotas da API  

| Método  | Rota                 | Descrição |
|---------|----------------------|-----------|
| GET     | `/todos`             | Retorna todas as tarefas |
| POST    | `/todos`             | Cria uma nova tarefa |
| PUT     | `/todos/{id}`        | Atualiza uma tarefa existente |
| DELETE  | `/todos/{id}`        | Remove uma tarefa |
| GET     | `/todos/{id}`        | Retorna uma tarefa pelo ID |
| PUT    | `/todos/{id}/finalizar`        | Marca uma tarefa como concluída |

## 🔧 Como Executar o Projeto  

### Backend  

1. Clone o repositório:  
   ```bash
   git clone https://github.com/matheusilveiraw/to-do-list-angular-back
   cd seu-repositorio

2. Instale as dependências:

```
    composer install
```

3. Instale as dependências:

Configure o banco de dados no arquivo .env e execute as migrações:

```
    php artisan migrate
```  

3. Inicie o servidor:

```
    php artisan serve
```  

Com isso o backend deve estar rodando.

### Frontend  
1. Clone o repositório:  

   ```bash
   git clone https://github.com/matheusilveiraw/to-do-list-angular-front
   cd seu-repositorio

2. Acesse a pasta do frontend e instale as dependências:
 
```
    npm install
```  

3. Inicie o servidor Angular:

Configure o banco de dados no arquivo .env e execute as migrações:

```
    ng serve
```  
    
Com isso o backend deve estar rodando em http://localhost:4200.