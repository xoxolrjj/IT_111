<?php
class Controller
{

    public  $departmentModel = null;
    public $employeeModel = null;
 function __construct()
    {
        require_once('models/department.php');
        $this->departmentModel = new DepartmentModel();
        require_once('models/employee.php');
        $this->employeeModel = new EmployeeModel();
    }
  public function navPages()
    {

         $command = isset($_REQUEST['command']) ? $_REQUEST['command'] : null;
             switch ($command) {
        case 'addRec':
            $departmentID = $_POST['department_id'] ?? null;
            $departmentName = $_POST['department_name'] ?? null;
            if (!empty($departmentID) && !empty($departmentName)) {
                $this->departmentModel->addDepartment($departmentID, $departmentName);
            }
            header("Location: index.php?command=0");
            exit();

        case 'editRec':
            $departmentID = $_POST['department_id'] ?? null;
            if ($departmentID) {
                $department = $this->departmentModel->getDepartmentById($departmentID);
                include_once('view/edit_department.php'); // Add an edit view
            }
            break;

        case 'saveRec':
            $departmentID = $_POST['department_id'] ?? null;
            $departmentName = $_POST['department_name'] ?? null;
            if ($departmentID && $departmentName) {
                $this->departmentModel->updateDepartment($departmentID, $departmentName);
            }
            header("Location: index.php?command=0"); // Redirect to the department list
            exit();


        case 'deleteRec':
            $departmentID = $_POST['department_id'] ?? null;
            if ($departmentID) {
                $this->departmentModel->deleteDepartment($departmentID);
            }
            header("Location: index.php?command=0");
            exit();
            

        case 'editEmp': // New case for editing employees
            $employeeID = $_GET['employee_id'] ?? null;
            if ($employeeID) {
                // Fetch the employee details using the employee model
                $employee = $this->employeeModel->getEmployeeById($employeeID);
                include_once('view/edit_employees.php'); // Load the edit employee view
            }
            break;

        case 'saveEmp': // Save updates to an employee
            $employeeID = $_POST['employee_id'] ?? null;
            $departmentID = $_POST['department_id'] ?? null;
            $name = $_POST['name'] ?? null;
            $position = $_POST['position'] ?? null;
            $hireDate = $_POST['hire_date'] ?? null;

            if ($employeeID && $departmentID && $name && $position && $hireDate) {
                // Update the employee details in the database
                $this->employeeModel->updateEmployee($employeeID, $departmentID, $name, $position, $hireDate);
            }
            header("Location: index.php?command=1"); // Redirect back to the employee list
            exit();
                
              
               
            case 0:
             $departments=  $this->departmentModel->getDepartment();

                include_once('view/department.php');
                break;
            case 1:
            $employees = $this->employeeModel->getEmployee();
                include_once('view/employees.php');
                break;
            case 2:
                
                include_once('view/attendance.php');
                break;
            case 3:
                include_once('view/leave.php');
                break;
            case 4:
                include_once('view/payroll.php'); 

            // case 'saveRec':
            //        $departmentName = $_REQUEST['departmentName'];
            //      $result = $this->model->updateDepartment($departmentID, $departmentName );
            // header("Location: index.php?command=0");
            // exit();
              break;       
                }
       
    } 
    
 
}
 
?>