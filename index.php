<?php
require_once("Models/clans/Independent_Orcs.php");
require_once("Models/clans/Dark_Elf.php");
require_once("Models/clans/Wood_Elf.php");
require_once("Models/clans/Wizards.php");
require_once("Models/clans/Gnomes.php");
require_once("Models/clans/Humans.php");
require_once("Models/clans/Orcs.php");



function fight($attacker, &$defender_team, &$defender_team_num){
 if($attacker != null && $defender_team_num != 0){
     $randomNumber = rand(0,count($defender_team_num) - 1);
     $attacker->act($defender_team[$randomNumber]);
     if ($defender_team[$randomNumber]->getStatus() == true){
         unset($defender_team[$randomNumber]);
         sort($defender_team);
         $defender_team_num--;
     }
 } else{
     return;
 }
}

$Green_Team  = new Team("Green Team");
$Red_Team    = new Team("Red Team");
$Units       = array("Dark_Elves_Archer",
                     "Dark_Elves_Warrior",
                     "Dark_Elves_Wizard",
                     "Gnomes_Warrior",
                     "Gnomes_Rune_Mage",
                     "Human_Arbalester",
                     "Human_Archer",
                     "Human_Warrior",
                     "Human_Knight",
                     "Independent_Orcs_Archer",
                     "Independent_Orcs_Warrior",
                     "Orcs_Archer",
                     "Orcs_Warrior",
                     "Orcs_Cyclops",
                     "Wood_Elves_Archer",
                     "Wood_Elves_Warrior",
                     "Wood_Elves_Doctor",
                     "Wizard_Archmage",
                     "Wizard_Witch");
$Names_Red   = array("Warrio","Double Jacket","Assest","Global Reset","Anomaly","Communism","Herecy","Francis","Illuminaty","Destructor");
$Names_Green = array("Suspicious","Duster","Hedgehog","Temmie","Louis","Serial Murdered","Tutorial","Bark","DogE","FrontEnd murder");

for( $i = 0; $i < 10; $i++){
    $Green_Team->Units[$i] = new $Units[rand(0,count($Units)-1)]($Names_Green[$i]);
    $Red_Team->Units[$i]   = new $Units[rand(0,count($Units)-1)]($Names_Red[$i]);
}
$Red_Team_Counter   = count($Red_Team->Units);
$Green_Team_Counter = count($Green_Team->Units);
$Round = 1;
echo "<span style='color:Green'>Зелёная команда: </span><br>";
for( $i = 0; $i < count($Green_Team->Units); $i++){
    echo "<span style='color:Green'>".$Green_Team->Units[$i]."</span><br>";
}

echo "<br><br><span style='color:Red'>Красная команда команда: </span><br>";
for( $i = 0; $i<count($Red_Team->Units); $i++){
     echo "<span style='color:Red'>".$Red_Team->Units[$i]."</span><br>";
}
echo "<br>========= Бой начался!! =========<br>";
$number_Team_Random = rand(0, 1);
while($Red_Team_Counter !=0 && $Green_Team_Counter !=0){
    echo "<br>===== Раунд $Round =====<br>";
    for ( $i = 0 ;$i < 10; $i++){
        if($number_Team_Random == 1 ){
            fight($Green_Team->Units[$i],$Red_Team->Units,$Red_Team_Counter);
        } else{
            fight($Red_Team->Units[$i],$Green_Team->Units,$Green_Team_Counter);
        }
    }
    $Round++;
}

if($Red_Team_Counter == 0){
    echo "<span style='color:green'> ".$Green_Team->teamName." wins</span>";
} else{
    echo "<span style='color:red'> ".$Red_Team->teamName." wins</span>";
}

?>