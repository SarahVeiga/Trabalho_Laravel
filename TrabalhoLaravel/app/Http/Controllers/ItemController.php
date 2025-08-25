<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Listar itens com paginação
    public function index()
    {
        $items = Item::latest()->paginate(10);
        return view('items.index', compact('items'));
    }

    // Formulário de criação
    public function create()
    {
        return view('items.create');
    }

    // Armazenar novo item
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Item criado com sucesso!');
    }

    // Exibir item específico
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    // Formulário de edição
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    // Atualizar item
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Item atualizado com sucesso!');
    }

    // Excluir item
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item excluído com sucesso!');
    }
}
