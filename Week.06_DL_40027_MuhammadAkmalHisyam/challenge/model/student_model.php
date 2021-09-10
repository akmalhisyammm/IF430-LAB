<?php
class Student
{
  private $_id;
  private $_studentId;
  private $_firstName;
  private $_lastName;

  function __construct($id, $student_id, $first_name, $last_name)
  {
    $this->_id = $id;
    $this->_studentId = $student_id;
    $this->_firstName = $first_name;
    $this->_lastName = $last_name;
  }

  public function setID($id)
  {
    $this->_id = $id;
  }

  public function setStudentId($student_id)
  {
    $this->_studentId = $student_id;
  }

  public function setFirstName($first_name)
  {
    $this->_firstName = $first_name;
  }

  public function setLastName($last_name)
  {
    $this->lastName = $last_name;
  }

  public function getId()
  {
    return $this->_id;
  }

  public function getStudentId()
  {
    return $this->_studentId;
  }

  public function getFirstName()
  {
    return $this->_firstName;
  }

  public function getLastName()
  {
    return $this->_lastName;
  }
}
