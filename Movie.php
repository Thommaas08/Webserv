<?php
class Movie 
{
    public $name= null;
    public $description;
    public $duration =120;
    public $date;
    
    public function __construct($name="") // constructeur 
    {
        $this->name=$name;
    }
    
    public function getName() 
    {
        return $this->name;
    }
    public function setName($name="")
    {
        $this->name=$name;
    }
     public function getDate() 
    {
        return $this->date;
    }
    public function setDate($date="")
    {
        $this->date=$date;
    }
     public function getDuration() 
    {
        return $this->duration;
    }
    public function setDuration($duration="")
    {
        $this->duration=$duration;
    }
    
    function aMovieFc()
    {
      print'name'.$this->name.'<br>';
      print'descriptionn'.$this->description.'<br>';
      print'duration'.$this->duration.'<br>';
      print'date'.$this->name.'<br>';
    }   
}
//fin de la class 

    $movie =new Movie();
    echo$movie->getName();
    $movie->setName("Taxi3");
    echo $movie->getName();
    $movie =aMovieFc();

