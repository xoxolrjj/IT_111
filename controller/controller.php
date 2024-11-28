<?php
class Controller
{

    public  $departmentModel = null;
 function __construct()
    {
        require_once('models/department.php');
        $this->departmentModel = new DepartmentModel();
 
    }
  public function navPages()
    {

         $command = isset($_REQUEST['command']) ? $_REQUEST['command'] : null;
             switch ($command) {
                case 0:
             $departments=  $this->departmentModel->getDepartment();
              //  $this->departmentModel->addDepartment();
                    include_once('view/department.php');
                break;
            case 1:
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
            // default:
            //     include_once('view/payroll.php');
            //     break;

            case 'addRec':
                 include_once('view/department.php');
                break;

            case 'saveRec':
                   $departmentName = $_REQUEST['departmentName'];
                 $result = $this->model->updateDepartment($departmentID, $departmentName );
            header("Location: index.php?command=0");
            exit();
              break;       
                }
       
    } 
    
 
}
 
?>