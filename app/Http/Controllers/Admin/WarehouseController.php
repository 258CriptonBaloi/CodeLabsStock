<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\WarehouseFormRequest;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
   public function index() {
      return view('admin.armazem.index');
   }

   public function create() {

    return view('admin.armazem.create');
   }

   public function store(WarehouseFormRequest $request) {


    $validatedData = $request->validated();

    $armazem = new Warehouse;
    $armazem->nome = $validatedData['nome'];
    $armazem->localizacao = $validatedData['localizacao'];
    $armazem->capacidade = $validatedData['capacidade'];
    $armazem->largura = $validatedData['largura'];
    $armazem->altura = $validatedData['altura'];
    $armazem->descricao = $validatedData['descricao'];

    $armazem->status = $request->status == true ? '1':'0';

    $armazem->save();

    return redirect('admin/armazem')->with('Mensagem', 'Armazem adicionado!');

}
}
