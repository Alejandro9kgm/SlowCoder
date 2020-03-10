<?php
use PHPUnit\Framework\TestCase;
use App\VictimSelector;

final class SelectorTest extends TestCase
{
   public function testSelectionVictimFromList()
   {
       $VictimList= ['carlos','sara', 'umit', 'joana', 'munir'];
    
       $Selection = new VictimSelector ();
    
       $selectedVictim= $Selection-> getVictimFromList ($VictimList) ;
       $this-> assertTrue(in_array($selectedVictim,$VictimList ));
   }
   public function testRandomVictimSelectionFromList()
   {
    $VictimList= ['carlos','sara', 'umit', 'joana', 'munir'];
 
    $Selection = new VictimSelector ();
 
    $selectedVictim= $Selection-> RandomVictimSelectionFromList($VictimList) ;
    $this-> assertTrue(in_array($selectedVictim,$VictimList));
    }
    public function TestAddVictimsToLimboList()
    {
        $LimboList= [];
    $Selection = new VictimSelector ();
   
    }
}
