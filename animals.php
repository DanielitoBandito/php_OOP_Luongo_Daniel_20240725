<?php

class Vertebrate{
    public function __construct(){
        $this->vertebrato();
    }

    protected function vertebrato(){
        echo "Sono un Vertebrato \n";
    }
}



class WarmBlood extends Vertebrate{
    public function __construct(){
        parent::vertebrato();
        $this->sangueCaldo();
    }
    protected function sangueCaldo(){
        echo "Sono a Sangue Caldo\n";
    }
}



class Mammal extends WarmBlood{
    public function __construct(){
        parent::__construct();
        $this->mammifero();
    }
    protected function mammifero(){
        echo "Sono un Mammifero\n";
    }
}

class Bird extends WarmBlood{
    public function __construct(){
        parent::__construct();
        $this->uccello();
    }
    protected function uccello(){
        echo "Sono un uccello\n";
    }
}




class ColdBlood extends Vertebrate{
    public function __construct(){
        parent::vertebrato();
        $this->sangueFreddo();
    }
    protected function sangueFreddo(){
        echo "Sono a Sangue Freddo\n";
    }
}



class Amphibian extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->anfibio();
    }
    protected function anfibio(){
        echo "Sono un Anfibio\n";
    }
    
}

class Reptile extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->rettile();
    }
    protected function rettile(){
        echo "Sono un Rettile \n";
    }
}

class Fish extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->pesce();
    }
    protected function pesce(){
        echo "Sono un Pesce\n";
    }
}

$trota = new Fish();

$leone = new Mammal();

$varano = new Reptile();

$rana = new Amphibian();

$tortora = new Bird();

