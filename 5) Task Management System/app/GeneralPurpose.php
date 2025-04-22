<?php
namespace App;

 class GeneralPurpose
 {
    public static function getErrorString($errArray) 
    {
        $valArr = array();
        foreach ($errArray->toArray() as $key => $value) 
        { 
            $errStr = $value[0];
            array_push($valArr, $errStr);
        }

        if(!empty($valArr))
        {
            $errStrFinal = implode('<br> ', $valArr);
        }

        return $errStrFinal;
    }
     

 }


?>