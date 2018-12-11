<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of disciplina
 *
 * @author Erickson
 */
class disciplina {
    public $combate_ince;
    public $Resgate_alt;
    public $nos_amara;
    public $aph;
    public $Legislacao;
    
    function __construct($combate_ince, $Resgate_alt, $nos_amara, $aph, $Legislacao) {
        $this->combate_ince = $combate_ince;
        $this->Resgate_alt = $Resgate_alt;
        $this->nos_amara = $nos_amara;
        $this->aph = $aph;
        $this->Legislacao = $Legislacao;
    }

}
