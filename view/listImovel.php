<?php
require_once './controller/ImovelController.php';
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
    <h1>Imoveis:</h1>
    <hr>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Endereço</th>
                    <th>Numero de quartos</th>
                    <th>Metragem</th>
                    <th>Numero de garagens</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $imoveis = call_user_func(array('ImovelController', 'listarImovel'));

                if (isset($imoveis)  && !empty($imovel)) {
                    foreach ($imoveis as $imovel) {
                ?>
                        <tr>
                            <td><?php echo $imovel->getEndereco(); ?></td>
                            <td><?php echo $imovel->getNQuartos(); ?></td>
                            <td><?php echo $imovel->getMetragem(); ?></td>
                            <td><?php echo $imovel->getNGaragem(); ?></td>
                            <td>
                                <a href="index.php?action=editarImovel&id=<?php echo $imovel->getId(); ?>">Editar</a>
                                <a href="index.php?action=excluirImovels&id=<?php echo $imovel->getId(); ?>">Excluir</a>
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