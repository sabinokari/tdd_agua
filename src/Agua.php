<?php
// Clase para agua

class Agua
{
    // GET

    function getStado(float $temperatura): string
    {
        if(is_float($temperatura)|| is_int($temperatura)){
        if($temperatura<= 0)return 'Sólido';
        if (0<$temperatura && $temperatura < 100) return 'Líquido';
        if (100<= $temperatura ) return 'Gaseoso';
        }else{
        return NULL;
        }
    }
}
