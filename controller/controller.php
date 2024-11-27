<?php
class Controller
{
  public function navPages()
    {

         $command = isset($_REQUEST['command']) ? $_REQUEST['command'] : null;
             switch ($command) {
                case 0:
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
                }
       
    }

}
 
?>