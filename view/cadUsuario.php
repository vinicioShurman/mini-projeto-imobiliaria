<?php
require_once './controller/UsuarioController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>

    <style>
        main {
            width: 250px;
            margin: auto;
            margin-top: 10%;
        }

        label {
            font-family: Roboto, sans-serif;
            font-size: 14px;
            font-weight: 550;
        }

        input {
            font-size: 12px;
            width: 230px;
            height: 30px;
            border: none;
            border-radius: 10px;
            margin: 5px 0 15px 0;
            padding: 0 10px 0 10px;
            background-color: #ebebeb;
        }

        input:hover,
        select:hover {
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.025)
        }

        *,
        *:hover,
        *:focus,
        *:active {
            border: 0px !important;
            outline: none !important;
        }

        select {
            width: 250px;
            height: 35px;
            border: none;
            border-radius: 10px;
            margin: 5px 0 15px 0;
            padding: 0 10px 0 10px;
            background-color: #ebebeb;
        }

        h1 {
            font-family: sans-serif;
            font-weight: 800;
            font-size: 35px;
            text-align: center;
            margin: 0 0 45px 0;
        }

        #btnSalvar {
            width: 250px;
            height: 40px;
            border-radius: 10px;
            margin: 5px 0 15px 0;
            color: #fff;
            font-weight: 800;
            background-color: #48a122;
        }

        #btnSalvar:hover {
            background-color: #3f8720;
            box-shadow: 0 0 10px 5px rgba(63, 135, 32, 0.08)
        }
    </style>
</head>

<body>
    <main>
        <h1>Cadastro</h1>
        <form name="cadUsuario" id="cadUsuario" action="" method="post">
            <label>Usuário: </label> <br>
            <input type="text" name="login" id="login" value="<?php echo isset($usuario) ? $usuario->getLogin() : '' ?>" />
            <br>
            <label>Senha:</label> <br>
            <input type="password" name="senha1" id="senha1" value="<?php echo isset($usuario) ? $usuario->getSenha() : '' ?>" />
            <br>
            <label>Confirmar Senha:</label> <br>
            <input type="password" name="senha2" id="senha2" value="" />
            <br>
            <label>Permissão: </label><br>
            <select name="permissao" id="permissao">
                <option value="0">***SELECIONE***</option>
                <option value="A" <?php echo isset($usuario) && ($usuario)->getPermissao() == 'A' ? 'selected' : '' ?>>Administrador</option>
                <option value="C" <?php echo isset($usuario) && ($usuario)->getPermissao() == 'C' ? 'selected' : '' ?>>Comum</option>
            </select>
            <input type="submit" name="btnSalvar" id="btnSalvar" value="Salvar" />
            <input type="hidden" name="id" id="id" value="<?php echo isset($usuario) ? $usuario->getId() : ''; ?>">
        </form>
    </main>
</body>

</html>
<?php
if (isset($_POST['btnSalvar'])) {
    call_user_func(array('UsuarioController', 'salvar'));
    header('Location: index.php?action=listar');
}
?>