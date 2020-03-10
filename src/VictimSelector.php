<?php
namespace App;

final class VictimSelector {

    public function getVictimFromList($list){
        return $list[0];
       
    } 
    public function RandomVictimSelectionFromList($list){
        $rand_index=array_rand($list);
        return $list[$rand_index];
    }

}