<?php
class lol{
    public $champs;
    public $skins;
    public $spells;

    public function __construct(string $champs, string $skins, string $spells){
        $this->champs = $champs;
        $this->skins = $skins;
        $this->spells = $spells;
    }
    public function getInfo(){
        $info= "<h2 style=text-align:center>Champs<br><hr>
        {$this->champs} Champ<br>
        {$this->skins} Name<br>
        {$this->spells} Spell<br>";
         return $info;
     }
      
}




?>