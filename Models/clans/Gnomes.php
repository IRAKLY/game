 <meta charset = "utf-8">
 <?php
    
    require_once("Units.php");
    
    class Gnomes_Warrior extends Unit{          //  Класс(роль) Гномий воин
        
        public function __construct(){
            $this->clansName = "Гном";
            $this->role      = "Воин";
            $this->currentHealthPoints = $this->maxHealthPoints = 120;
            $this->speed     = 5;
            $this->armor     = 17;
            $this->physicalAttackPoints = 8;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 0;
            $this->magicalResistance    = 0.7;
        }
        public function act($person){
            parent::act($person);
        }
    }


    class Gnomes_Rune_Mage extends Unit{       //  Класс(роль) Гномий Рунный маг
        
        protected $Mana;                        //  Мана
        protected $hasMana  = true;             //  Имеется ли мана?
        
        public function __construct(){
            $this->clansName = "Гном";
            $this->role      = "Рунный Маг";
            $this->currentHealthPoints = $this->maxHealthPoints = 120;
            $this->speed     = 3;
            $this->armor     = 10;
            $this->Mana      = 30;
            $this->physicalAttackPoints = 5;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 9;
            $this->magicalResistance    = 0.7;
        }
        public function act($person){
            parent::act($person);
        }
    }  