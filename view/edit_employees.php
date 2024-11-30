<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="css/styles_employees.css?v=1.1">
</head>
<body>
    <div class="header">
        <h1>Edit Employee</h1>
    </div>

    <div class="main-content">
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($employee['Name']) ?>" required>

            <label for="department-id">Department ID:</label>
            <input type="text" id="department-id" name="department_id" value="<?= htmlspecialchars($employee['DepartmentID']) ?>" required>

            <label for="position">Position:</label>
            <input type="text" id="position" name="position" value="<?= htmlspecialchars($employee['Position']) ?>" required>

            <label for="hire-date">Hire Date:</label>
            <input type="date" id="hire-date" name="hire_date" value="<?= htmlspecialchars($employee['HireDate']) ?>" required>

            <div class="form-actions">
                <button type="submit" class="save-btn">Save</button>
                <a href="employees.php" class="cancel-btn">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
