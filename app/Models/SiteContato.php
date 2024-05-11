<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    private string $nome;

    private string $telefone;

    private string $email;

    private int $motivo;

    private string $mensagem;

    public function getNome() : string {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getTelefone() : string {
        return $this->telefone;
    }

    public function setTelefone(string $telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getMotivo() : int {
        return $this->motivo;
    }

    public function setMotivo(int $motivo) {
        $this->motivo = $motivo;
    }

    public function getMensagem() : string {
        return $this->mensagem;
    }

    public function setMensagem(string $mensagem) {
        $this->mensagem = $mensagem;
    }
}
