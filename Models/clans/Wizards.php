 <meta charset = "utf-8">
 <?php
    
    require_once("Units.php");

    class Wizard_Archmage extends Unit{         //  Класс(роль) Колдун-Архимаг
        
        protected $Mana;                        //  Мана
        protected $hasMana  = true;             //  Имеется ли мана?
        
        public function __construct(){
            $this->clansName = "Колдун";
            $this->role      = "Архимаг";
            $this->currentHealthPoints = $this->maxHealthPoints = 50;
            $this->speed     = 4;
            $this->armor     = 2;
            $this->Mana      = 100;
            $this->physicalAttackPoints = 3;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 7;
            $this->magicalResistance    = 1.0;
        }
        public function act($person){
            parent::act($person);
        }
    }  
    
    class Wizard_Witch extends Unit{            //  Класс(роль) Колдун-Ведьма
        
        protected $Mana;                        //  Мана
        protected $hasMana  = true;             //  Имеется ли мана?
        
        public function __construct(){
            $this->clansName = "Колдун";
            $this->role      = "Ведьма";
            $this->currentHealthPoints = $this->maxHealthPoints = 50;
            $this->speed     = 6;
            $this->armor     = 0;
            $this->Mana      = 30;
            $this->physicalAttackPoints = 1;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 10;
            $this->magicalResistance    = 1.0;
        }
        public function act($person){
            parent::act($person);
        }
    }  