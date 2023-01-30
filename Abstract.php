<?php

abstract class lol{
    public $champs;
    public $skins;
    //public $spells;

    public function SetChamps(string $champs, string $skins){
        $this->champs = $champs;
        $this->skins = $skins;
    }
    public function GetName():string{
        return $this->champs;
        
    }
    public function GetName1():string{
        return $this->skins;
    }
    
}