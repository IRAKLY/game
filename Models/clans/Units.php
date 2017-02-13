<meta charset = "UTF-8">
<?php

abstract class Unit{                            //  Общий класс юнитов
    
    protected $clansName;                       //  Принадлежность юнита к клану 
    protected $role;                            //  Класс(роль) юнита 
    protected $speed;                           //  Скорость
    protected $armor;                           //  Броня
    protected $maxHealthPoints;                 //  Максимальное колличество очков здоворья
    protected $currentHealthPoints;             //  Значение текущего колличества очков опыта
    protected $physicalAttackPoints = 0;        //  Значение очков физического урона
    protected $rangedAttackPoints   = 0;        //  Значение очков дальнобойнего урона
    protected $magicalAttackPoints  = 0;        //  Значение очков магического урона
    protected $magicalResistance    = 0;        //  Коэфициент блокирования магического урона брони юнита
    protected $isDied = false;                  //  Переключатель "Жив ли юнит?"
    
    
    protected function act($person){                                                    //Базовая функция действия
        //if($this->magicalResistance > 0 && $this->physicalAttackPoints > $this->magicalAttackPoints){
            $damage = ( $this->physicalAttackPoints + $this->speed ) - $this->armor;        //Вычисление урона с учётом блокирование части урона бронёй Урон = ( Атака + Скорость ) - Броня;
        //} else{
        //    $damage =  ceil(($this->magicalAttackPoints + $this->speed) / 2);        //Вычисление урона с учётом блокирование части урона бронёй Урон = ( Магическая Атака + Скорость ) / 2;
        //    
        //}  
        $person->currentHealthPoints -= $damage;                                        //Уменьшение текущих очков здоровья в соответствии с полученным уроном 
        Unit::aftermath($person);                                                       //Расчёт последствий для юнита, получавшего урон
        echo $this."(HP:$this->currentHealthPoints/$this->maxHealthPoints) Атаковал ". $person."(HP:$person->currentHealthPoints/$person->maxHealthPoints)<br>";   //Вывод лога с указание кто кого аттаковал
        
        if($person->isDied == false && $person->currentHealthPoints <= 0){              //Запрос "Выжил ли юнит"
            $person->isDied = true;                                                     //Установка переключателя состояния юнита на "Мёртв"
            echo $person."<span style='color:red;'>Умер</span><br>";                    //Вывод сообщения о смерти юнита
        }
    }
    
    static private function aftermath($person){             //Функция расчёта последствий удара
        if($person->currentHealthPoints <= 0){              //Сверка "Имеет ли юнит здоворье 0 или меньше"
            $person->currentHealthPoints = 0;               //Обнуление очков здоровья для избежания отрицательных значений
            return;                                         //Незамедлительное окончание расчётов последствий (мёртвому юниту уже нечего терять)
        }

    }
    
    protected function setDamageArcher(){
        $damageArcher = $this->rangedAttackPoints + $this->speed  - $this->armor;
        $damageAccuracy = $damageArcher * 0.25;
        $damageArcherWithAccuracy = $damageArcher + $damageAccuracy;
        
    }
    
    
    public function __toString(){
        return $this->clansName." <span style='color:Blue'>".get_class($this)."</span>";
    }
    public function getStatus(){    //Функция получения статуса жизни юнита
        return $this->isDied;
    }
}

class Team{
    public $teamName;
    public $Units;
    
    public function __construct($name){
        $this->teamName = $name;
        $Units=array();
    }
    
    //public function __toString(){
    //  return $this->teamName;
    //}
}