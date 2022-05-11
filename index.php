<?php
require_once 'controller/UsuarioController.php';

if(isset($_GET['action'])){
    if($_GET['action'] == 'editar'){
        $usuario = call_user_func(array('UsuarioController', 'editar'), $_GET['id']);
        require_once 'view/cadUsuario.php';
    }

    if($_GET['action'] == 'listar'){
        require_once 'view/listUsuario.php';
    }

    if($_GET['action'] == 'excluir'){
        $usuario = call_user_func(array('UsuarioController', 'excluir'), $_GET['id']);
        require_once './view/listUsuario.php';
    } 
    if($_GET['action']== 'new'){
        require_once './view/cadImovel.php';
    }

   if($_GET['action'] == 'editarImovel'){
    $imovel = call_user_func(array('ImovelController', 'editarImovel'), $_GET['id']);
    require_once 'view/cadImovel.php';
}

if($_GET['action'] == 'listarImovel'){
    require_once 'view/listImovel.php';
}

if($_GET['action'] == 'excluirImovel'){
    $imovel = call_user_func(array('ImovelController', 'excluirImovel'), $_GET['id']);
    require_once './view/listImovel.php';
} 

}else{
    require_once 'view/cadUsuario.php';
}
