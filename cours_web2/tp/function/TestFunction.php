<?php
    
function unite($unit){
    $mess;
    switch($unit){
        case 0:
            $mess=" ";
            break;
        case 1:
            $mess="Un";
            break;
        case 2:
            $mess="Deux";
            break;
        case 3:
            $mess="Trois";
            break;  
        case 4:
            $mess="Quatre";
            break; 
        case 5:
            $mess="Cinq";
            break;
        case 6:
             $mess="six";
            break;  
        case 7:
             $mess="sept";
             break;  
        case 8:
            $mess="huit";
            break;
        case 9:
            $mess="neuf";
            break;
        default:
            $mess="";
            break;

    }
    return $mess;
}
//fonction dizaine
function Diz($unit){
    $mess;
    switch($unit){
        case 0:
            $mess=" ";
            break;
        case 1:
            $mess="Dix";
            break;
        case 2:
            $mess="Vingt";
            break;
        case 3:
            $mess="Trente";
            break;  
        case 4:
            $mess="Quarante";
            break; 
        case 5:
            $mess="Cinquante";
            break;
        case 6:
             $mess="soixante";
            break;  
        case 7:
             $mess="septante";
             break;  
        case 8:
            $mess="huitante";
            break;
        case 9:
            $mess="nonante";
            break;
        default:
            $mess="";
            break;

    }
    return $mess;
}
//fonction centaine
function centaine($nb){
    $mess;
    switch($nb){
        case 0:
            $mess=" ";
            break;
        case 1:
            $mess="cent";
            break;
        case 2:
            $mess="deux_cent";
            break;
        case 3:
            $mess="Trois_cent";
            break;  
        case 4:
            $mess="Quatre_cent";
            break; 
        case 5:
            $mess="Cinq_cent";
            break;
        case 6:
             $mess="six_cent";
            break;  
        case 7:
             $mess="sept_cent";
             break;  
        case 8:
            $mess="huit_cent";
            break;
        case 9:
            $mess="neuf_cent";
            break;
        default:
            $mess="";
            break;

    }
    return $mess;
}
function millaine($nbr){
    $mess;
    switch($nbr){
        case 0:
            $mess=" ";
            break;
        case 1:
            $mess="mille";
            break;
        case 2:
            $mess="deux_mille";
            break;
        case 3:
            $mess="Trois_mille";
            break;  
        case 4:
            $mess="Quatre_mille";
            break; 
        case 5:
            $mess="Cinq_mille";
            break;
        case 6:
             $mess="six_mille";
            break;  
        case 7:
             $mess="sept_mille";
             break;  
        case 8:
            $mess="huit_mille";
            break;
        case 9:
            $mess="neuf_mille";
            break;
        default:
            $mess="";
            break;

    }
    return $mess;
}
function exception($nbr){
    $mess;
    switch($nbr){
        case 11:
            $mess="onze";
            break;
        case 12:
            $mess="douze";
            break;
        case 13:
            $mess="Treize";
            break;  
        case 14:
            $mess="Quatorze";
            break; 
        case 15:
            $mess="Quinze";
            break;
        case 16:
             $mess="seize";
            break;  
        default:
            $mess="";
            break;

    }
    return $mess;
}
function multiple_mille($nbr){
    $mess;
    switch($nbr){
        case 0:
            $mess=" ";
            break;
        case 1:
            $mess="dix_mille";
            break;
        case 2:
            $mess="vinght_mille";
            break;
        case 3:
            $mess="trente_mille";
            break;  
        case 4:
            $mess="quarante_mille";
            break; 
        case 5:
            $mess="Cinqqnte_mille";
            break;
        case 6:
             $mess="soixante_mille";
            break;  
        case 7:
             $mess="septante_mille";
             break;  
        case 8:
            $mess="huitante_mille";
            break;
        case 9:
            $mess="noinante_mille";
            break;
        default:
            $mess="";
            break;

    }
    return $mess;
}
function multiple_dix_mille($nbr){
    $mess;
    switch($nbr){
        case 0:
            $mess=" ";
            break;
        case 1:
            $mess="cent_mille";
            break;
        case 2:
            $mess="deux_cent_mille";
            break;
        case 3:
            $mess="trois_cent_mille";
            break;  
        case 4:
            $mess="quatre_cent_mille";
            break; 
        case 5:
            $mess="Cinq_cent_mille";
            break;
        case 6:
             $mess="six_cent_mille";
            break;  
        case 7:
             $mess="sept_cent_mille";
             break;  
        case 8:
            $mess="huit_cent_mille";
            break;
        case 9:
            $mess="neuf_cent_mille";
            break;
        default:
            $mess="";
            break;

    }
    return $mess;
}

?>