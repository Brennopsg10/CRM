<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmPessoa extends Model
{
    use HasFactory;

    protected $table = 'crmpessoa';
    protected $fillable = ['nomepessoa','txcpf', 'dtnasc'];
}
