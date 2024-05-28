<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWithAddress extends Model
{
    
     protected $fillable = [
            'nome', 'email', 'senha',
            'rua', 'cidade', 'pais'
        ];
    
        public static function criarUsuearioComEndereco(array $dados)
        {
            // Cria o usuário
            $usuario = User::create([
                'nome' => $dados['nome'],
                'email' => $dados['email'],
                'senha' => bcrypt($dados['senha']),
            ]);
    
            // Cria o endereço associado ao usuário
            $endereco = $usuario->enderecos()->create([
                'rua' => $dados['rua'],
                'cidade' => $dados['cidade'],
                'pais' => $dados['pais'],
            ]);
    
            return $usuario;
        }
    
        public function atualizarComEndereco(array $dados)
        {
            // Atualiza o usuário
            $this->update([
                'nome' => $dados['nome'],
                'email' => $dados['email'],
                'senha' => bcrypt($dados['senha']),
            ]);
    
            // Atualiza o endereço associado ao usuário
            $this->endereco->update([
                'rua' => $dados['rua'],
                'cidade' => $dados['cidade'],
                'pais' => $dados['pais'],
            ]);
    
            return $this;
        }
    
        public function endereco()
        {
            return $this->hasOne(Address::class);
        }
    
}
