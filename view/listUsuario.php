<?php
require_once './controller/UsuarioController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    </style>
</head>

<body>
    <h1>Usuarios:</h1>
    <hr>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Login</th>
                    <th>Permissão</th>
                    <th><a href="index.php?action=new">Novo</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $usuarios = call_user_func(array('UsuarioController', 'listar'));

                if (isset($usuarios) && !empty($usuarios)) {
                    foreach ($usuarios as $usuario) {
                ?>
                        <tr>
                            <td><?php echo $usuario->getLogin(); ?></td>
                            <td><?php echo $usuario->getPermissao(); ?></td>
                            <td>
                                <a href="index.php?action=editar&id=<?php echo $usuario->getId(); ?>">Editar</a>
                                <a href="index.php?action=excluir&id=<?php echo $usuario->getId(); ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>