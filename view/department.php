<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Management</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <!-- Include the Sidebar -->
    <div class="wrapper">
         <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Departmentssss</h1>
            </div>
            <div class="content-area">
                <div class="add-department">
                    <h2>Add Department</h2>
                    <form action="add_department.php" method="POST">
                        <input type="text" name="department_name" placeholder="Department Name" required>
                        <div class="form-actions">
                            <button type="submit" class="save-btn">Save</button>
                            <button type="reset" class="cancel-btn">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="department-list">
                    <h2>Department List</h2>
                    <div class="search-bar">
                        <input type="text" placeholder="Quick Search..." />
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Department Name</th>
                                <th>Manager ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ahmed Rashdan</td>
                                <td>101</td>
                                <td>
                                    <button class="edit-btn">✏️</button>
                                    <button class="delete-btn">🗑️</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Ali Alhamdan</td>
                                <td>102</td>
                                <td>
                                    <button class="edit-btn">✏️</button>
                                    <button class="delete-btn">🗑️</button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
