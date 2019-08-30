<?php

//É necessario fazer a conexão com o banco de dados
require_once "configDB.php";

function verificar_entrada($entrada)
{
    $saida = trim($entrada); //remove espaços antes e depois
    $saida = stripslashes($saida); //remove as barras
    $saida = htmlspecialchars($saida);
    return $saida;
}

if (isset($_POST['action']) && $_POST['action'] == 'cadastro') {

    //pegar os campos do formulario
    $nomeCompleto = verificar_entrada($_POST['nomeCompleto']);
    $nomeUsuario = verificar_entrada($_POST['nomeUsuário']);
    $emailUsuario = verificar_entrada($_POST['emailUsuário']);
    $senhaUsuario = verificar_entrada($_POST['senhaUsuário']);
    $senhaConfirma = verificar_entrada($_POST['senhaConfirma']);
    $concordar = $_POST['concordar'];
    $dataCriacao = date("Y-m-d H:i:s");
    // Hash de senha/ Codificação

    $senha = sha1($senhaUsuario);
    $senhaC = sha1($senhaConfirma);
    if ($senha != $senhaC) {
        echo "<h1> As senha nao conferem</h1>";
        exit();
    } else {
        // echo "<h5>senha codificada: $senha</h5>";
        // Verificar se o usuário ja existe no banco de dados
        $sql = $conecta->prepare("SELECT nomeUsuario, email FROM usuario WHERE nomeUsuario = ? OR email = ?");
        //Substitui cada ? por uma string abaixo
        $sql->bind_param("ss", $nomeUsuario, $emailUsuario);
        $sql->execute();
        $resultado = $sql->get_result();
        $linha = $resultado->fetch_array(MYSQLI_ASSOC);
        if ($linha['nomeUsuario'] == $nomeUsuario) {
            echo "<p> Nome de usuário indisponível, tente outro</p>";
        } elseif ($linha['email'] == $emailUsuario) {
            echo "<p> Email ja em uso, tente outro</p>";
        } else {
            $sql = $conecta->prepare("INSERT into usuario(nome, nomeUsuario, email, senha, dataCriacao) values(?, ?, ?, ?, ?)");
            $sql->bind_param("sssss", $nomeCompleto, $nomeUsuario, $emailUsuario, $senha, $dataCriacao);
            if ($sql->execute()) {
                echo "<p>Registrado com sucesso</p>";
            } else {
                echo "<p>Aldo deu errado. Tente outra vez</p>";
            }
        }
    }
} else {
    echo "<h1 style = 'color:tomato'> Esta Pagina Não Pode ser acessada Diretamente</h2>";
}
