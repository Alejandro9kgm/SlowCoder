<?php
use PHPUnit\Framework\TestCase;
use App\VictimSelector;
use App\Conection;

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
 
        $SelectionRandom = new VictimSelector ();
 
        $RandomSelectedVictim= $SelectionRandom-> RandomVictimSelectionFromList($VictimList);
        $this-> assertTrue(in_array($RandomSelectedVictim,$VictimList));
    }

    public function testEmptyList()
    {
        $EmptyList= array();

        $VerificationEmptyList = new VictimSelector();

        $IsVictimListEmpty= $VerificationEmptyList-> VerifyEmptyList($EmptyList);
        $this-> assertTrue($IsVictimListEmpty);
    }

    /*public function testAddVictimToList(){
        $VictimList= ['carlos','sara', 'umit', 'joana', 'munir'];
        $NewVictim= "andrea";


        $VictimAdditionToList = new VictimSelector();

        $NewVictimList= $VictimAdditionToList-> AddVictimToList($VictimList,$NewVictim);
        $this-> assertTrue(in_array($NewVictim, $NewVictimList));

    }
    public function testDeleteVictimFromList(){
        $VictimList= ['carlos','sara', 'umit', 'joana', 'munir'];
        $VictimToDelete = 'sara';

        $VictimDeletionFromList = new VictimSelector();

        $NewVictimList= $VictimDeletionFromList->DeleteVictimFromList($VictimList,$VictimToDelete);
        $this-> assertFalse(in_array($VictimToDelete, $VictimList));

    }*/
}

final class ConectionTest extends TestCase
{
    public function testconect()
    {
        $usuario = "root";
        $password = "";
        $servidor = "127.0.0.1";
        $basededatos = "mydb";
        $connect= new Conection();
        $conectar= $connect->linking($servidor, $usuario, $password, $basededatos);
        $this->assertSame('connected', $conectar);
        //$this->assertTrue(true);
    }

}
