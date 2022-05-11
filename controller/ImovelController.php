<?php
require_once './model/Imovel.php';

class ImovelController
{

    public static function salvar()
    {

        $imovel = new Imovel();
        $imovel->setEndereco($_POST['endereco']);
        $imovel->setNQuartos($_POST['nQuartos']);
        $imovel->setMetragem($_POST['metragem']);
        $imovel->setNGaragem($_POST['nGaragem']);

        $imovel->save();
    }

    public static function listarImovel()
    {
        $imovel = new Imovel;
        return $imovel->listAll();
    }

    public static function editarImovel($id)
    {
        $imovel = new Imovel;
        $imovel = $imovel->find($id);
        return $imovel;
    }
    
    public static function excluirImovel($id)
    {
        $Imovel = new Imovel;
        $Imovel = $Imovel->remove($id);
    }
}
