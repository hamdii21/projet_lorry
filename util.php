<?php

function init_php_session() : bool
{

    if(!session_id()){

        session_start();
        session_regenerate_id();

        return true ;
    
    }
    
    return false;
    
}

function clean_php_section() : void
{

    session_unset();
    session_destroy();
}

function is_logged():bool
{
    if(isset($_SECTION['email']))
       return true;
    return false;   
}

function is_admin() :bool
{
    if(is_logged());
       
}







?>
