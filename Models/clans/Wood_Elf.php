 <meta charset = "utf-8">
 <?php
    
    require_once("Units.php");
    
    
    class Wood_Elves_Archer extends Unit{       //  Класс(роль)  Эльфийский лесной лучник
            
        protected $Ammo;                        //  Боеприпасы
        protected $accuracy;                    //  Меткость
        protected $hasAmmo  = true;             //  Имеются ли стрелы?
        
        public function __construct(){
            $this->clansName = "Лесной эльф";
            $this->role      = "Лучник";
            $this->currentHealthPoints = $this->maxHealthPoints = 150;
            $this->accuracy  = 30;
            $this->speed     = 9;
            $this->armor     = 5;
            $this->Ammo      = 50;  
            $this->physicalAttackPoints = 7;
            $this->rangedAttackPoints   = 14;
            $this->magicalAttackPoints  = 0;
            $this->magicalResistance    = 0.5;
            $this->setDamageArcher();
        }
        public function act($person){
            
            if($this->hasAmmo == true && $this->Ammo <= 0){
                echo "$this Патроны закончились!!<br>";
                $this->hasAmmo = false;
            }
            if($this->Ammo > 0){
                $this->Ammo -= 1;
            }
            //if($this->hasMana == true && $this->Mana <= 0){
            //    echo "$this Магическая энергия пуста!!<br>";
            //    $this->hasMana = false;
            //}
            //if($this->Mana > 0){
            //    $this->Mana -= 10;
            //}
            parent::act($person);
        }
    }

    
    class Wood_Elves_Warrior extends Unit{      //  Класс(роль) Эльфийский лесной воин
        
        public function __construct(){
            $this->clansName = "Лесной эльф";
            $this->role      = "Воин";
            $this->currentHealthPoints = $this->maxHealthPoints = 150;
            $this->speed     = 20;
            $this->armor     = 12;
            $this->physicalAttackPoints = 16;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 0;
            $this->magicalResistance    = 0.5;
        }
        public function act($person){
            parent::act($person);
        }
    }


    class Wood_Elves_Doctor extends Unit{       //  Класс(роль) Эльфийский лесной лекарь
        
        protected $Mana;                        //  Мана
        protected $hasMana  = true;             //  Имеется ли мана?
        
        public function __construct(){
            $this->clansName = "Лесной эльф";
            $this->role      = "Лекарь";
            $this->currentHealthPoints = $this->maxHealthPoints = 150;
            $this->speed     = 12;
            $this->armor     = 0;
            $this->Mana      = 30;
            $this->physicalAttackPoints = 0;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 0;
            $this->magicalResistance    = 0.5;
        }
        public function act($person){
            parent::act($person);
        }
    }  