<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Student.php";

    $DB = new PDO('pgsql:host=localhost;dbname=students_test');

    class StudentTest extends PHPUnit_Framework_TestCase
    {

      protected function tearDown()
        {
            Student::deleteAll();

        }


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

        function test_save()
        {
          //Arrange
          $name = "Tommy";
          $date = '2000-03-23 12:00:00';
          $id = 1;
          $test_student = new Student ($name,$date,$id);
          $test_student->save();
          //Act
          $result = Student::getAll();

          //Assert

          $this->assertEquals($test_student, $result[0]);
        }

        function test_getAll()
        {
          //Arrange
          $name = "Stacy";
          $date = '2003-11-12 12:00:00';
          $id = 1;
          $test_student = new Student($name, $date, $id);
          $test_student->save();

          $name2 = "Ryan";
          $date2 = '2012-11-23 12:00:00';
          $test_student2 = new Student($name2, $date2);
          $test_student2->save();


          //Act
          $result = Student::getAll();

          //Assert
          $this->assertEquals([$test_student,$test_student2], $result);
        }

        function test_deleteAll()
        {
          //Arrange
          $name = "Billy";
          $date = '2004-12-23 12:00:00';
          $id = 4;
          $test_student = new Student($name, $date, $id);
          $test_student->save();

          $name2 = "Hero";
          $date2 = '2004-02-23 12:00:00';
          $id2 = 6;
          $test_student2 = new Student($name2, $date2, $id2);
          $test_student2->save();

          //Act
          Student::deleteAll();
          $result = Student::getAll();

          //Assert
          $this->assertEquals([],$result);
        }



    }
?>
