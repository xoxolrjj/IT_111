<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="../css/styles_add_employees.css">
   
</head>
<body>

 
    <!-- Main Content -->
    <div class="content">
        <div class="header">
            <h1>Employees</h1>
        </div>
        
        <div class="form-container">
            <h2>Add Employee</h2>
            <form action="save_employee.php" method="POST" enctype="multipart/form-data">
                <label for="id">ID</label>
                <input type="text" id="id" name="id" placeholder="Employee ID" required>

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Employee Name" required>

                <label for="position">Position</label>
                <input type="text" id="position" name="position" placeholder="Employee Position" required>

                <label for="department">Department</label>
                <input type="text" id="department" name="department" placeholder="Department" required>

                <button type="submit" class="btn-save">Save</button>
                <button type="reset" class="btn-cancel">Cancel</button>
            </form>
        </div>

        <div class="table-container">
            <input type="text" class="quick-search" placeholder="Quick Search...">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2341421</td>
                        <td>Ahmed Rashdan</td>
                        <td>Help Desk Executive</td>
                        <td>IT Department</td>
                        <td><a href="edit_employee.php?id=2341421">Edit</a></td>
                    </tr>
                    <tr>
                        <td>3411421</td>
                        <td>Ali Alhamdan</td>
                        <td>Senior Executive</td>
                        <td>Marketing</td>
                        <td><a href="edit_employee.php?id=3411421">Edit</a></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
