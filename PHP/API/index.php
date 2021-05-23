<?

@include ('../php-dischi/database.php');
@include ('../includes/functions.inc.php');

cors(); // abilito i permessi

$db = array_filter($database, function($val){    

    $el=array_filter($val, function($value,$key){ //filtro i valori 
        
        if ($_GET[$key]===''){
            unset($_GET[$key]);              
        }
        return (($_GET[$key] == $value));
    },ARRAY_FILTER_USE_BOTH);    

    return (count($el)===count($_GET));  // filtro i valori con le stesse occorrenze
},ARRAY_FILTER_USE_BOTH);

printf ("%s",json_encode($db==[] ? $database : $db));

?>