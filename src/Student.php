<?php

  class Student
  {

      private $name;
      private $date;
      private $id;


      function __construct($name, $date, $id= null)
          {

            $this->name = $name;
            $this->date = $date;
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

           function getDate()
           {
               return $this->date;
           }

           function setDate($new_date)
           {
               $this->date = (int) $new_date;
           }

           function getId()
           {
               return $this->id;
           }

           function setId($new_id)
           {
               $this->id = (int) $new_id;
           }

           function save()
           {
             $statement = $GLOBALS['DB']->query("INSERT INTO students(name,date) VALUES ('{$this->getName()}', '{$this->getDate()}') RETURNING id;");
             $result = $statement->fetch(PDO::FETCH_ASSOC);
             $this->setId($result['id']);
           }


           static function getAll()
           {
             $statement = $GLOBALS['DB']->query("SELECT * FROM students;");
             $student_array = $statement->fetchAll(PDO::FETCH_ASSOC);
             $return_array = array();

             foreach($student_array as $students)
             {
               $name = $students['name'];
               $date = $students['date'];
               $id = $students['id'];
               $new_students = new Student($name, $date, $id);
               array_push($return_array, $new_students);
             }
             return $return_array;


           }

           static function deleteAll()
           {
             $GLOBALS['DB']->exec("DELETE FROM students *;");
           }








}


 ?>
