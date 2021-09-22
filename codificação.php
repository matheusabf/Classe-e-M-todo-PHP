<?php

class Exemplo{

    function palavra($palavra){
        //primeira letra
        //ultima letra
        return 'A primeira letra é : ' . substr($palavra, 0, 1) . ' </br>A última letra é : ' .  substr($palavra, -1)  . ' </br> ';
    }

    function quantidadepalavra($palavra){
        //quantidade de letras
        return 'A quantidade de letra é de : ' .  strlen($palavra) . '</br>';
    }

    function vogaispalavra($palavra){
        $qtd = 0;
        foreach (count_chars($palavra, 1) as $i => $val) {
            if (chr($i) == 'a' || chr($i) == 'e' || chr($i) == 'i' || chr($i) == 'o' || chr($i) == 'u') {
                //echo " $val \"" , chr($i) , "\" </br>";
                $qtd += $val;
                $ret[] = $val . '('. chr($i) .')';
            }
         }
         return 'Quantidadede vogais : ' . implode(" + ", $ret). ' = '.$qtd . '</br>';
    }

    function consoantespalavra($palavra){
        $qtd = 0;
        foreach (count_chars($palavra, 1) as $i => $val) {
            if (chr($i) != 'a' && chr($i) != 'e' && chr($i) != 'i' && chr($i) != 'o' && chr($i) != 'u') {
                //echo " $val \"" , chr($i) , "\" </br>";
                $qtd += $val;
                $ret[] = $val . '('. chr($i) .')';
            }
         }
         return 'Quantidadede vogais : ' . implode(" + ", $ret). ' = '.$qtd;
    }

}