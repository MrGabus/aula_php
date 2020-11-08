<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro($mensagem = 'O nome não pode ser vazio, por favor preencha novamente.');
        return false;
    }
    else if(strlen($nome) < 3)
    {
        setarMensagemErro($mensagem = 'O nome deve conter mais de 3 caracteres.') ;
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro($mensagem = 'O nome não pode ter mais que 40 caracteres.');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro($mensagem = 'Informe um número para idade.');
        return false;
    }
    return true;
}