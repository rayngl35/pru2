<?php
    function comprobar_email($email){
        $mail_correcto=0;
        if((strlen($email)>=6)&&(substr_count($email,"@")==1)){
            if(substr_count($email,".")>=1){
                $term_dom=substr(strrchr($email,"."),1);
                if(strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@"))){
                    $antes_dom=substr($email,0,strlen($email)-strlen($term_dom)-1);
                    $caracter_ult=substr($antes_dom,strlen($antes_dom)-1,1);
                    if($caracter_ult !="@" && $caracter_ult !="."){
                        $mail_correcto=1;
                    }
                }
            }
        }
        if ($mail_correcto)
            return 1;
        else
            return 0;
    }
function no_control($no_control){
    $correcto=0;
    if(strlen($no_control)==8)
        $correcto=1;
    else
        $correcto=0;
    if($correcto)
        return 1;
    else
        return 0;
}
function num($ci){
    $correcto=0;
    if(!is_numeric($ci))
        $correcto=1;
    else
        $correcto=0;
    if($correcto)
        return 1;
    else
        return 0;
}
?>