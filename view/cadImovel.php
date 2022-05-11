<?php
require_once './controller/ImovelController.php';
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
            <label>Endereço: </label> <br>
            <input type="text" name="endereco" id="endereco" value="<?php echo isset($imovel) ? $imovel->getEndereco() : '' ?>" />
            <br>
            <label>Número de quartos:</label> <br>
            <input type="text" name="nQuartos" id="nQuartos" value="<?php echo isset($imovel) ? $imovel->getNQuartos() : '' ?>" />
            <br>
            <label>Metragem:</label> <br>
            <input type="text" name="metragem" id="metragem" value="<?php echo isset($imovel) ? $imovel->getMetragem() : '' ?>" />
            <br>
            <label>Numero de garagens:</label> <br>
            <input type="text" name="nGaragem" id="nGaragem" value="<?php echo isset($imovel) ? $imovel->getNGaragem() : '' ?>" />
            <br>
            <input type="submit" name="btnSalvar" id="btnSalvar" value="salvar" />
            </div>
        </form>
    </main>
</body>

</html>
<?php
if (isset($_POST['btnSalvar'])) {
    call_user_func(array('ImovelController', 'salvar'));
    header('Location: index.php?action=listarImovel');
}
?>