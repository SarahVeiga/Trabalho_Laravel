<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Tela de cadastro
    public function create() {
        return view('users.create');
    }

    // Salvar novo usuário
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso.');
    }

    // Tela de login
    public function loginForm() {
        return view('login');
    }

    // Processar login
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['user_id' => $user->id]);
            return redirect()->route('logged');  // Redireciona para a tela pós-login
        }

        return back()->withErrors(['email' => 'Email ou senha inválidos'])->withInput();
    }

    // Tela pós-login
    public function logged() {
        // Verificar se o usuário está logado
        if (!session()->has('user_id')) {
            return redirect()->route('login');
        }

        // Buscar o usuário na base de dados
        $user = User::find(session('user_id'));

        // Verificar se o usuário foi encontrado
        if (!$user) {
            return redirect()->route('login');
        }

        // Passar o usuário para a view
        return view('users.logged', compact('user'));
    }

    // Tela de edição de usuário
    public function edit($id) {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Atualizar usuário
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('logged')->with('success', 'Dados atualizados com sucesso.');
    }
    public function logout() {
    // Remover o usuário da sessão
    session()->forget('user_id');

    // Redirecionar para a página de login
    return redirect()->route('login');
}
}
