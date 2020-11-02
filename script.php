<?php

session_start();

$categorias = [];
$categorias[] = 'intantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha novamente.';
    header('location: index.php');
    return;
}

else if(strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres.';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ter mais que 40 caracteres.';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Informe um número para idade.';
    header('location: index.php');
    return;
}

if($idade >= 6 && $idade <=12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'intantil')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
            header('location: index.php');
            return;
        }        
    }
}

else if($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolecente')
        {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' .$nome. " compete na categoria " .$categorias[$i];
            header('location: index.php');
            return;
        }        
    }
}

else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
            header('location: index.php');
            return;
        }        
    }
}

