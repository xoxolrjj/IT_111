<?php
class DepartmentModel
{
    public $db = null;

    function __construct()
    {
        try {
            $this->db = new mysqli('localhost', 'root', '', 'employee_management');
        } catch (mysqli_sql_exception $e) {
            exit('Database connection could not be established.');
        }
    }

    public function addDepartment($departmentName)
    {
        $stmt = $this->db->prepare("INSERT INTO department (Name) VALUES (?)");
        $stmt->bind_param('s', $departmentName);
        return $stmt->execute();
    }

        public function getDepartment() 
    {
        $data = array();
        $queryGetDepartment = mysqli_query($this->db, "SELECT * FROM department");

        while ($getRow = mysqli_fetch_object($queryGetDepartment)) {
            $data[] = $getRow; // Add the row to the results array
        }

        return $data;     
    }

    public function updateDepartment($departmentName)
    {
        $updateDepartment = $this->db->prepare("UPDATE department SET Name = ? WHERE DepartmentID = ?");
        $stmt-> $this->db->prepare($updateDepartment);
        $stmt->bind_param('s',$departmentName);
        return $stmt->execute();
    }


}
?>
