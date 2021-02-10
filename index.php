<?php
$classe = [
    0 =>["J","Amaury","age","Belgique","passions"=>["passion1","passion2"]],
    1 =>["A","Chloé","age","France","passions"=>["passion1","passion2"]],
    2 =>["S","Clément","age","France","passions"=>["passion1","passion2"]],
    3 =>["O","Damien","age","France","passions"=>["passion1","passion2"]],
    4 =>["C","Elodie","age","Belgique","passions"=>["passion1","passion2"]],
    5 =>["G","Gaetan","age","France","passions"=>["passion1","passion2"]],
    6 =>["B","Laurie","age","France","passions"=>["passion1","passion2"]],
    7 =>["P","Matthias","age","Belgique","passions"=>["passion1","passion2"]],
    8 =>["B","Mickael","age","France","passions"=>["passion1","passion2"]],
    9 =>["O","Mickael","age","France","passions"=>["passion1","passion2"]],
    10 =>["B","Pierre-Yves","age","France","passions"=>["passion1","passion2"]],
    11 =>["B","Sylvie","age","France","passions"=>["passion1","passion2"]],
    12 =>["T","Yann","age","France","passions"=>["passion1","passion2"]],
];

for($i = 0 ; $i < count($classe) ; $i++){
    echo "<div>".$classe[$i][1]." ".$classe[$i][0]."</div>";
}



