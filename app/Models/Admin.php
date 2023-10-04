<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements Authenticatable
{
    use HasFactory;

    protected $fillable = ['name','email','password'];

    public function getAuthIdentifierName()
    {
        return 'id'; // Nome do campo de identificação
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // Valor do campo de identificação (normalmente o ID do usuário)
    }

    public function getAuthPassword()
    {
        return $this->password; // Campo da senha do usuário
    }

    public function getRememberToken()
    {
        return $this->remember_token; // Campo do token de lembrete
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value; // Define o token de lembrete
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // Nome do campo do token de lembrete
    }
}
