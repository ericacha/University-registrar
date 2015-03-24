<?php

  class Student
  {

      private $name;
      private $id;
     // private $date_enrollment;


      function __construct($name,$id= null)
          {

            $this->name = $name;
            $this->id = $id;


         }
           function getName()
           {
               return $this->name;

           }

           function setName($new_name)
           {
               $this->name = (string) $new_name;
           }



           

           function getDateEnrollment()
           {
               return $this->date_enrollment;
           }

           function setDateEnrollment($new_date_enrollment)
           {
               $this->date_enrollment = (int) $new_date_enrollment;
           }

           function getId()
           {
               return $this->id;
           }

           function setId($new_id)
           {
               $this->id = (int) $new_id;
           }





      }





















 ?>
