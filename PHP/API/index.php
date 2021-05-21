<?
@include ('../php-dischi/database.php');
@include ('../includes/functions.inc.php');

cors(); // abilito i permessi

// i
var_dump($_GET);

for($i=0 ; $i<count($database) ; $i++)  
var_dump( array_filter($database[$i], function($val,$k){
    //var_dump($k);
    return ($k === 'pop');
},ARRAY_FILTER_USE_BOTH) );


// f





//printf ("%s",json_encode($database));

?>