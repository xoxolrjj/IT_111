<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Management</title>
  <link rel="stylesheet" href="css/styles_employees.css?v=1.1">
</head>
<body>

    <div class="header">
        <h1>Employees</h1>
    </div>

    <!-- Main Content -->
    <div class="main-content">
    
        <div class="employee-overview">
            <!-- Add Employee Form -->
            <div class="add-employee">
                <h2>Add Employee</h2>
                <form action="process_add_employee.php" method="POST">
                    <label for="employee-id">Employee ID:</label>
                    <input type="text" id="employee-id" name="employee_id" placeholder="Enter Employee ID" required>
                    
                    <label for="department-id">Department ID:</label>
                    <input type="text" id="department-id" name="department_id" placeholder="Enter Department ID" required>
                    
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name" required>
                    
                    <label for="position">Position:</label>
                    <input type="text" id="position" name="position" placeholder="Enter Position" required>
                    
                    <label for="hire-date">Hire Date:</label>
                    <input type="date" id="hire-date" name="hire_date" required>
                    
                    <div class="form-actions">
                        <button type="submit" class="save-btn">Save</button>
                        <button type="reset" class="cancel-btn">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="employee-table">
            <!-- Search and Add Employee section -->
            <div class="search-add">
                <input type="text" class="search-input" placeholder="Quick Search...">
                <button type="button" class="search-btn">Search</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Department ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Hire Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($employees)): ?>
                        <?php foreach($employees as $employee): ?>
                            <tr>
                                <td><?= htmlspecialchars($employee->EmployeeID) ?></td> 
                                <td><?= htmlspecialchars($employee->DepartmentID) ?></td> 
                                <td><?= htmlspecialchars($employee->Name) ?></td> 
                                <td><?= htmlspecialchars($employee->Position) ?></td> 
                                <td><?= htmlspecialchars($employee->HireDate) ?></td> 
                                <td>
                                    <a href="index.php?command=editEmp&employee_id=<?= urlencode($employee->EmployeeID) ?>" class="edit-btn">Edit</a>
                                    <a href="process_delete_employee.php?employee_id=<?= urlencode($employee->EmployeeID) ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this employee?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">No employees found.</td>
                        </tr>
                    <?php endif; ?>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
