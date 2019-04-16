<?php
class Yamaha extends Moto implements Yamaha_Interface{
    private $isSport;

  public function __construct($marque, $model, $prix, $topCase, $isSport)
  {
      parent::__construct($marque, $model, $prix, $topCase);
      $this->isSport = $isSport;
  }


      /**
       * @return mixed
       */
      public function getIsSport()
      {
          return $this->isSport;
      }

      /**
       * @param mixed $isSport
       */
      public function setIsSport($isSport)
      {
          $this->isSport = $isSport;
      }
    public function ride(){
    }

}
?>
