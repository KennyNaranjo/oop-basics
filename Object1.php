<?php

require_once("Base-class.php");
require_once("Object.php");

class lol1 extends lol{
    protected $mana;
    public function __construct(string $champs, string $skins, string $spells){
        parent::__construct($champs, $skins, $spells);
    }
    public function SetMana(string $mana){
        $this->mana = $mana;
    }
    public function GetMana():string{
        return $this->mana;
    }
}
$object1 = new lol1("Cat", "Silver", "Silf");
echo $object1->getInfo();
$object1->SetMana("Rp");
echo "Value: {$object1->GetMana()}";
