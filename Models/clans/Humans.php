 <meta charset = "utf-8">
 <?php
    
    require_once("Units.php");
    
    
    class Human_Archer extends Unit{            //  Класс(роль)  Человеческий лучник
            
        protected $Ammo;                        //  Боеприпасы
        protected $accuracy;                    //  Меткость
        protected $hasAmmo  = true;             //  Имеются ли стрелы?
        
        public function __construct(){
            $this->clansName = "Человек";
            $this->role      = "Лучник";
            $this->currentHealthPoints = $this->maxHealthPoints = 100;
            $this->accuracy  = 10;
            $this->speed     = 5;
            $this->armor     = 5;
            $this->Ammo      = 30;  
            $this->physicalAttackPoints = 3;
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

    class Human_Arbalester extends Unit{        //  Класс(роль)  Человеческий арбалетчик
            
        protected $Ammo;                        //  Боеприпасы
        protected $accuracy;                    //  Меткость
        protected $hasAmmo  = true;             //  Имеются ли стрелы?
        
        public function __construct(){
            $this->clansName = "Человек";
            $this->role      = "Арбалетчик";
            $this->currentHealthPoints = $this->maxHealthPoints = 100;
            $this->accuracy  = 20;
            $this->speed     = 4;
            $this->armor     = 5;
            $this->Ammo      = 20;  
            $this->physicalAttackPoints = 5;
            $this->rangedAttackPoints   = 10;
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
    
    class Human_Warrior extends Unit{           //  Класс(роль) Человеческий воин
        
        protected $Mana;                        //  Мана
        protected $hasMana  = true;             //  Имеется ли мана?
        
        public function __construct(){
            $this->clansName = "Человек";
            $this->role      = "Воин";
            $this->currentHealthPoints = $this->maxHealthPoints = 100;
            $this->speed     = 7;
            $this->armor     = 12;
            $this->physicalAttackPoints = 12;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 0;
            $this->magicalResistance    = 0;
        }
        public function act($person){
            parent::act($person);
        }
    }
    
    class Human_Knight extends Unit{           //  Класс(роль) Человеческий рыцарь
        
        protected $Mana;                        //  Мана
        protected $hasMana  = true;             //  Имеется ли мана?
        
        public function __construct(){
            $this->clansName = "Человек";
            $this->role      = "Рыцарь";
            $this->currentHealthPoints = $this->maxHealthPoints = 100;
            $this->speed     = 15;
            $this->armor     = 10;
            $this->physicalAttackPoints = 16;
            $this->rangedAttackPoints   = 0;
            $this->magicalAttackPoints  = 0;
            $this->magicalResistance    = 0;
        }
        public function act($person){
            parent::act($person);
        }
    }