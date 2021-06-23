<?php

include_once('view/View.php');

class MaterialsView extends View
{

    public function showMaterialsInfo($materials)
    {
        $this->getSmarty()->assign('title', 'Info');
        $this->getSmarty()->assign('materials', $materials);
        $this->getSmarty()->display('templates/info.tpl');
    }
    public function mostrarPanelAdminMateriales($materials)
    {
        $this->getSmarty()->assign('title', 'AdminPanel');
        $this->getSmarty()->assign('materials', $materials);
        $this->getSmarty()->display('templates/adminView.tpl');
    }

    public function showFormEditMaterials($data){
    //    var_dump($data);die;
        $this->getSmarty()->assign('datos', $data);
        $this->getSmarty()->display('templates/showFormEditMaterials.tpl');
    }
}
