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
            $id = null;
            $test_student = new Student($name, $id);

            //Act
            $result = $test_student->getName();

            //Assert
            $this->assertEquals($name,$result);

        }
        function testSetName()
        {
            //Arrange
            $name = "Tommy";
            $test_student = new Student($name);

            //Act
            $test_student->setName("Cool.");
            $result = $test_student->getName();

            //Assert
            $this->assertEquals("Cool.",$result);

        }




    }
?>
