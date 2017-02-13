 <meta charset = "utf-8">
 <?php
    
    require_once("Units.php");
    
    
    class Orcs_Archer extends Unit{             //  Класс(роль)  Орочьий лучник
            
        protected $Ammo;                        //  Боеприпасы
        protected $accuracy;                    //  Меткость
        protected $hasAmmo  = true;             //  Имеются ли стрелы?
        
        public function __construct(){
            $this->clansName = "Орк";
            $this->role      = "Лучник";
            $this->currentHealthPoints = $this->maxHealthPoints = 70;
            $this->accuracy  = 8;
            $this->speed     = 3;
            $this->armor     = 2;
            $this->Ammo      = 15;  
            $this->physicalAttackPoints = 8;
            $this->rangedAttackPoints   = 8;
            $this->magicalAttackPoints  = 0;
            $this->magicalResistance    = 0;
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

    
    class Orcs_Warrior extends Unit{      //  Класс(роль) Орочьий воин
        
        public function __construct(){
            $this->clansName = "Орк";
            $this->role      = "Воин";
            $this->currentHealthPoints = $this->maxHealthPoints = 70;
            $this->speed     = 9;
            $this->armor     = 5;
            $this->physicalAttackPoints = 12;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 0;
            $this->magicalResistance    = 0;
        }
        public function act($person){
            parent::act($person);
        }
    }
    
    
    class Orcs_Cyclops extends Unit{      //  Класс(роль) Орочьий циклоп
        
        public function __construct(){
            $this->clansName = "Орк";
            $this->role      = "Циклоп";
            $this->currentHealthPoints = $this->maxHealthPoints = 70;
            $this->speed     = 7;
            $this->armor     = 10;
            $this->physicalAttackPoints = 25;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 0;
            $this->magicalResistance    = 0;
        }
        public function act($person){
            parent::act($person);
        }
    }