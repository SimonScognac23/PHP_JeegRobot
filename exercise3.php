<?php

// JeegRobot
// 2 braccia
// gambe

class Jeeg{


    public $armSx;  // attacco

    public $armDx;   //attacco

    public$legs;  // difesa


    public function __construct(Arm $_armSx, Arm $_armDx, Legs $_legs){  // DEPENDENCY INJECTION 
                                                            // OBJECT COMPOSITION
            $this->armSx = $_armSx;
            $this->armDx = $_armDx;
            $this->legs = $_legs;

    }

   /// public function attaccareSx(){

      //  $this->armSx->attacco();

  //  }

  //  public function attaccareDx(){

    //    $this->armDx->attacco();
        
  //  }

  //  public function movimento(){

   //     $this->legs->muoviti();
  //  }



  public function attaccare(string $side ='dx'){   // gli passo un parametro side, e gli dico che deve essere una stringa
    // di default se non passa niente passa dx, cosi dovro specificare quando passa sx

   if( $side == 'sx') {

    $this->armSx->attacco();

   }

   else {

    $this->armDx->attacco();

   }

}



}



//----------------------------------  ARM  -----------------------------------------------------------------------------------------------------------------


// creo le entita che mi rappresentano le braccia

abstract class Arm{   // quello che mi serve di arm è solo la struttura, o meglio il template quindi usero abstract


abstract public function attacco();


}



// definisco le due tipologie di braccia PugnoFerro e Trivella

class PugnoFerro extends Arm{

    // PugnoFerro eredita il comportamento astratto e lo concretizza

    public function attacco(){

        echo "Ti prendo a mazzate\n";
    }
}




class Trivella extends Arm{

public function attacco(){

    echo "Ti buco il petto\n";

}

}






//-------------------------------------------------  LEGS  ------------------------------------------------------------------------------------------

abstract class Legs{    // classi meglio in inglese e al singolare

 abstract public function muoviti();
   

}


class Cingoli extends Legs{

  public function muoviti(){

    echo "Mi muovo ovunque\n";


  }

}


  class Razzi extends Legs{

    public function muoviti(){

        echo "Volo su di te\n";
    }
  
}






//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------








// Creo l'oggetto
$jeeg = new Jeeg( new PugnoFerro() , new Trivella() , new Razzi()  );   // istanziamo un oggetto di classe PugnoFerro e passarlo come parametro, senza definirgli un nome


//     $jeeg->armSx->attacco();  // richiamo il metodo dai singoli attributi

//    $jeeg->attaccareSx();  // richiamo il metodo dall'oggetto



$jeeg->attaccare('sx');
$jeeg->attaccare('dx');
