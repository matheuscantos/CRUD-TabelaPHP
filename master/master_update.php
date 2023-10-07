<?php header('Content-type: text/html; charset=UTF-8'); ?>
<?php
/** INCLUDES */
include_once 'master_dbconfig.php';

/* CONTROLE DE SESSÃO PARA ACESSO AS CHAMADAS INTERNAS, DESCOMENTAR EM USO NA PRODUCAO */

/* session_start();
if (isset($_SESSION['idempresa']) != true && isset($_SESSION['idusuario']) != true) {
    unset($_SESSION['idempresa']);
    unset($_SESSION['idusuario']);
    unset($_SESSION['nomeusuario']);
    unset($_SESSION['tipologin']);
    header('Location: index.php');
    exit;
} */

$tipooperacao = '';


/** DEFINE TIPO DE OPERACAO */
if (isset($_POST['tipooperacao'])) {
    $tipooperacao = $_POST['tipooperacao'];
}
if (isset($_GET['tipooperacao'])) {
    $tipooperacao = $_GET['tipooperacao'];
}

/* Funcao Busca usuario */

if ($tipooperacao == "getusuarios") {

    $placeholder = "";

    /* Para casos futuros, e possivel filtrar os usuarios selecionados, podendo adicionar um filtro em status, ou datas, deixei apenas a var para status, mas aqui
    seria possivel filtrar por todos os campos */

    if (isset($_POST['status'])) {
        $status = $_POST['status'];
    } else {
        $status = 0;
    }

    echo $mastercrud->getUsuarios($status);
}

/* Funcao Adiciona usuario */

if ($tipooperacao == "addusuario") {

    if (isset($_POST['nomeusuario'])) {
        $nomeusuario = $_POST['nomeusuario'];

        if ($nomeusuario == "") {
            echo 2;
            return false;
        }

    } else {
        echo 2;
        return false;
    }

    if (isset($_POST['emailusuario'])) {
        $emailusuario = $_POST['emailusuario'];

        if ($emailusuario == "") {
            echo 2;
            return false;
        }

    } else {
        echo 2;
        return false;
    }

    if (isset($_POST['dataadmissaousuario'])) {
        $dataadmissaousuario = $_POST['dataadmissaousuario'];

        if ($dataadmissaousuario == "") {
            echo 2;
            return false;
        }

    } else {
        echo 2;
        return false;
    }

    echo $mastercrud->addUsuario($nomeusuario, $emailusuario, $dataadmissaousuario);
}

/* Funcao Update usuario */

if ($tipooperacao == "updateusuario") {

    if (isset($_POST['idusuario'])) {
        $idusuario = $_POST['idusuario'];
    }else{
        echo 2;
        return false;
    }
    

    if (isset($_POST['nomeusuario'])) {
        $nomeusuario = $_POST['nomeusuario'];

        if ($nomeusuario == "") {
            echo 2;
            return false;
        }

    } else {
        echo 2;
        return false;
    }

    if (isset($_POST['emailusuario'])) {
        $emailusuario = $_POST['emailusuario'];

        if ($emailusuario == "") {
            echo 2;
            return false;
        }
        
    } else {
        echo 2;
        return false;
    }

    if (isset($_POST['dataadmissaousuario'])) {
        $dataadmissaousuario = $_POST['dataadmissaousuario'];

        if ($dataadmissaousuario == "") {
            echo 2;
            return false;
        }

    } else {
        echo 2;
        return false;
    }

    echo $mastercrud->updateUsuario($idusuario, $nomeusuario, $emailusuario, $dataadmissaousuario);
}

/* Funcao Remove usuario */

if ($tipooperacao == "removeusuario") {

    if (isset($_POST['idusuario'])) {
        $idusuario = $_POST['idusuario'];
    }else{
        echo 2;
        return false;
    }
    
    echo $mastercrud->removeUsuario($idusuario);
}

?>