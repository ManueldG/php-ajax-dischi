<?
@include ('../php-dischi/database.php');
@include ('../includes/functions.inc.php');

cors(); // abilito i permessi

printf ("%s",json_encode($database));

?>