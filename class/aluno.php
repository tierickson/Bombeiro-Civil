<?php

/**
 * Description of aluno
 *
 * @author Erickson
 */
class Aluno {

    public $idaluno;
    public $nome;
    public $sobrenome;
    public $cpf;
    public $usuario;
    public $senha;
    public $tipo_sanguineo;
    public $email;
    public $ativo;
    public $nome_gerra;

    function __construct($idaluno, $nome, $sobrenome, $cpf, $usuario, $senha, $tipo_sanguineo, $email, $nome_gerra) {
        $this->idaluno = $idaluno;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->tipo_sanguineo = $tipo_sanguineo;
        $this->email = $email;
        $this->nome_gerra = $nome_gerra;
    }

    
    
}
