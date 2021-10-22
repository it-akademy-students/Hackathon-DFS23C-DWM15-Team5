<?php 






function RandomNumber($min,$max){
    return rand($min,$max);
}


//cette fonction genere deux nombre ,l'operateur et le resultat
function GenereLeCalcul(){
    // ce teableau permet de remplacer un nombre en texte exemple : $tab[4] = quatre ;
    $tab = ['zero','un','deux','trois','quatre','cinq','six','sept','huit','neuf','dix'];
    // tableau qui regroupe les operations possibles et qui sera choisie par la function genereUnNombreEntreZeroEtDeux()
    $tableauOperateurs = ['-','+','*'];
    //on choisie le premier nombre aléatoirement grace à la fonction genereUnNombreEntreZeroDix()
    $premierNombre = RandomNumber(0,10);
    //on choisie le premier nombre aléatoirement grace à la fonction genereUnNombreEntreZeroDix()
    $secondNombre = RandomNumber(0,10);
    //on transforme $premierNombre en texte
    $premierNombreEnTexte = $tab[$premierNombre];
    //on transforme $secondNombre en texte
    $secondNombreEnTexte = $tab[$secondNombre];
    // on pioche dans le tableau $tableauOperateurs un operateur grace au nombre generer par genereUnNombreEntreZeroEtDeux() qui donnera par exemple $tableauOperateurs[2] donc '*'
    $operateur = $tableauOperateurs[RandomNumber(0,2)];
    // si l'operateur est '-' on rentre dans ce if
    if($operateur == '-'){
        // On verifie que le premier nombre soit supérieur au second pour empecher un nombre negatif, si c'est le cas, on lui attribue la valeur max possible qui est 10, donc le resultat minimum serais 0
        if($premierNombre < $secondNombre){
            $premierNombre = 10;
            $premierNombreEnTexte = 'dix';
        }
        $result = $premierNombre - $secondNombre;
    }
    // si l'operateur est '+' on rentre dans ce if
    else if($operateur == '+'){
        $result = $premierNombre + $secondNombre;
    }
    // si l'operateur est '*' on rentre dans ce if
    else if($operateur == '*'){
        $result = $premierNombre * $secondNombre;
    }
    // on a plusieurs variable a retournée, donc on l'envoie sous forme de tableau.
    return [$result, $premierNombre,$secondNombre,$operateur,$premierNombreEnTexte,$secondNombreEnTexte];
}


function CaptchaVerification($inputValue,$result){
    if($inputValue === $result){
        return true;
    }else{
        return false;
    }
}



?>