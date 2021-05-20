<?


foreach ( $database as $key => $val ){
    echo("\n<div class = 'scheda'>");
    foreach ( $val as $k => $el){
        $el = $k==='poster' ? "<img src='$el' alt='poster'>" : $el;
        printf("<p class='%s'> %s </p>",$k,$el);
}
    echo ("</div>");
    }
    


?>