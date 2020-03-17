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
    /*public function AddVictimToLimbo($list, $limbolist)
        array_push($LimboList, RandomVictimSelectionFromList($list))
    */
    public function VerifyEmptyList($list){
        if (count($list)==0){
            return True;
        }
    }
    /*public function AddVictimToList($list, $victim){
        array_slice($list, $victim);
        return $list;
    }
    public function DeleteVictimFromList($list, $victim){
        $key = array_search($victim, $list);
        unset($list($key));
        return $list;


    }*/
}