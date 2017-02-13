 <meta charset = "utf-8">
 <?php
    
    require_once("Units.php");
    
    
    class Dark_Elves_Archer extends Unit{       //  Класс(роль)  Эльфийский тёмный лучник
            
        protected $Ammo;                        //  Боеприпасы
        protected $Mana;                        //  Мана
        protected $accuracy;                    //  Меткость
        protected $hasAmmo  = true;             //  Имеются ли стрелы?
        protected $hasMana  = true;             //  Имеется ли мана?
        
        public function __construct(){
            $this->clansName = "Тёмный эльф";
            $this->role      = "Лучник";
            $this->currentHealthPoints = $this->maxHealthPoints = 200;
            $this->accuracy  = 25;
            $this->speed     = 12;
            $this->armor     = 7;
            $this->Ammo      = 20;  
            $this->Mana      = 20;
            $this->physicalAttackPoints = 6;
            $this->rangedAttackPoints   = 16;
            $this->magicalAttackPoints  = 7;
            $this->magicalResistance    = 1.0;
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

    
    class Dark_Elves_Warrior extends Unit{      //  Класс(роль) Эльфийский тёмный воин
        
        protected $Mana;                        //  Мана
        protected $hasMana  = true;             //  Имеется ли мана?
        
        public function __construct(){
            $this->clansName = "Тёмный эльф";
            $this->role      = "Воин";
            $this->currentHealthPoints = $this->maxHealthPoints = 200;
            $this->speed     = 25;
            $this->armor     = 10;
            $this->Mana      = 10;
            $this->physicalAttackPoints = 20;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 3;
            $this->magicalResistance    = 1.0;
        }
        
        public function act($person){
            parent::act($person);
        }
    }


    class Dark_Elves_Wizard extends Unit{       //  Класс(роль) Эльфийский тёмный маг
        
        protected $Mana;                        //  Мана
        protected $hasMana  = true;             //  Имеется ли мана?
        
        public function __construct(){
            $this->clansName = "Тёмный эльф";
            $this->role      = "Маг";
            $this->currentHealthPoints = $this->maxHealthPoints = 200;
            $this->speed     = 6;
            $this->armor     = 4;
            $this->Mana      = 70;
            $this->physicalAttackPoints = 7;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 13;
            $this->magicalResistance    = 1.0;
        }
        
        public function act($person){
            parent::act($person);
        }
    }  