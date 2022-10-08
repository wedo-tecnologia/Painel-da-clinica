<?php
    function timing($time) {

        $time = time() - $time;
        $time = ($time<1)?1:$time;
        $tokens = array(
            31536000 => 'ano',
            2592000 => 'mês',
            604800 => 'semana',
            86400 => 'dia',
            3600 => 'hora',
            60 => 'minuto',
            1 => 'segundo'
        );

        foreach($tokens as $unit => $text){
            if($time<$unit) continue;
            $numberOfUnits = floor($time/$unit);
            if($text == 'segundo'){
                return 'Agora mesmo';
            }
            return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
        }

    }
?>