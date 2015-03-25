<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Student.php";

    $DB = new PDO('pgsql:host=localhost;dbname=students_test');

    class StudentTest extends PHPUnit_Framework_TestCase
    {


        function testGetName()
        {
            //Arrange
            $name = "Tommy";
            $date = 2000-03-23;
            $id = null;
            $test_student = new Student($name,$date, $id);

            //Act
            $result = $test_student->getName();

            //Assert
            $this->assertEquals($name,$result);

        }
        function testSetName()
        {
            //Arrange
            $name = "Tommy";
            $date = 2000-03-23;
            $id = null;
            $test_student = new Student($name, $date, $id);

            //Act
            $test_student->setName("Cool.");
            $result = $test_student->getName();

            //Assert
            $this->assertEquals("Cool.",$result);

        }

        function testGetId()
        {
          //Arrange
          $name = "Tommy";
          $date = 2000-03-23;
          $id = 1;
          $test_student = new Student($name, $date, $id);

          //Act
          $result=$test_student->getId();

          //Assert
          $this->assertEquals(1, $result);
        }

        function testSetId()
        {
          //Arrange
          $name = "Tommy";
          $date = 2000-03-23;
          $id = 1;
          $test_student = new Student($name, $date, $id);

          //Act
          $test_student->setId(2);

          //Assert
          $result = $test_student->getId();
          $this->assertEquals(2,$result);


        }



    }
?>
