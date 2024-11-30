<?php
class EmployeeModel
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

// public function addDepartment($departmentID, $departmentName)
// {
//     $stmt = $this->db->prepare("INSERT INTO department (DepartmentID, Name) VALUES (?, ?)");
//     $stmt->bind_param('is', $departmentID, $departmentName);  // 'i' for integer (DepartmentID), 's' for string (DepartmentName)
//     return $stmt->execute();
// }


        public function getEmployee() 
    {
        $data = array();
        $quertGetEmployee = mysqli_query($this->db, "SELECT * FROM employee");

        while ($getRow = mysqli_fetch_object($quertGetEmployee)) {
            $data[] = $getRow;  
        }

        return $data;     
    }
 
//     public function editDepartMent()
//     {
//         $stmt = $this->db->prepare("UPDATE department SET Name=? WHERE DepartmentID = ?");
//         $stmt->bind_param('s', $departmentName);
//         return $stmt->execute();
//     }
//     public function deleteDepartment($departmentID)
//     {
//         $stmt = $this->db->prepare("DELETE FROM department WHERE DepartmentID = ?");
//         $stmt->bind_param('i', $departmentID);
//         return $stmt->execute();
//     }

// public function updateDepartment($departmentID, $departmentName)
// {
//     $stmt = $this->db->prepare("UPDATE department SET Name = ? WHERE DepartmentID = ?");
//     $stmt->bind_param('si', $departmentName, $departmentID);  // 's' for string (Name), 'i' for integer (DepartmentID)
//     return $stmt->execute();
// }


// public function getDepartmentById($departmentID)
// {
//     $stmt = $this->db->prepare("SELECT * FROM department WHERE DepartmentID = ?");
//     $stmt->bind_param('i', $departmentID);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     return $result->fetch_object();
// }

 // Method to get employee details by ID
 public function getEmployeeById($employeeID)
 {
     $stmt = $this->db->prepare("SELECT * FROM employee WHERE EmployeeID = ?");
     $stmt->bind_param('i', $employeeID); // 'i' for integer (EmployeeID)
     $stmt->execute();
     $result = $stmt->get_result();
     return $result->fetch_assoc(); // Fetch as an associative array
 }

 // Method to update employee details
 public function updateEmployee($employeeID, $departmentID, $name, $position, $hireDate)
 {
     $stmt = $this->db->prepare("UPDATE employee SET DepartmentID = ?, Name = ?, Position = ?, HireDate = ? WHERE EmployeeID = ?");
     $stmt->bind_param('isssi', $departmentID, $name, $position, $hireDate, $employeeID); // Bind parameters
     return $stmt->execute(); // Execute the statement
 }

}
?>
