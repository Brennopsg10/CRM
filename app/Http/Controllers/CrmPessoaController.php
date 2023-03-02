<?php

namespace App\Http\Controllers;

use App\Models\CrmPessoa;
use Illuminate\Support\Facades\DB;

class CrmPessoaController extends Controller
{

    public function index()
    {
        $pessoas = CrmPessoa::all();
        // dd($pessoas);
        return view('pessoa.index',['pessoas' => $pessoas]);
    }
}
