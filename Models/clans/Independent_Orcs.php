 <meta charset = "utf-8">
 <?php
    
    require_once("Units.php");
    
    class Independent_Orcs_Archer extends Unit{             //  Класс(роль)  Независимый орочьий лучник
            
        protected $Ammo;                        //  Боеприпасы
        protected $accuracy;                    //  Меткость
        protected $hasAmmo  = true;             //  Имеются ли стрелы?
        
        public function __construct(){
            $this->clansName = "Независимый орк";
            $this->role      = "Лучник";
            $this->currentHealthPoints = $this->maxHealthPoints = 80;
            $this->accuracy  = 9;
            $this->speed     = 5;
            $this->armor     = 0;
            $this->Ammo      = 10;  
            $this->physicalAttackPoints = 10;
            $this->rangedAttackPoints   = 9;
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

    
    class Independent_Orcs_Warrior extends Unit{      //  Класс(роль) Независимый орочьий воин
        
        public function __construct(){
            $this->clansName = "Независимый орк";
            $this->role      = "Воин";
            $this->currentHealthPoints = $this->maxHealthPoints = 80;
            $this->speed     = 9;
            $this->armor     = 5;
            $this->physicalAttackPoints = 14;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 0;
            $this->magicalResistance    = 0;
        }
        public function act($person){
            parent::act($person);
        }
    }