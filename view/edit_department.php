<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
    <link rel="stylesheet" href="css/styles_department.css">
</head>
<body>

    <div class="header">
        <h1>Edit Department</h1>
    </div>

    <div class="main-content">
        <div class="edit-department">
            <h2>Edit Department Details</h2>
            <form action="" method="POST">
                <input type="hidden" name="department_id" value="<?= htmlspecialchars($department->DepartmentID) ?>">
                <input type="text" name="department_name" placeholder="Department Name" value="<?= htmlspecialchars($department->DepartmentName) ?>" required>
                
                <div class="form-actions">
                    <button type="submit" name="update" class="save-btn">Update</button>
                    <button type="button" class="cancel-btn" onclick="window.location.href='index.php';">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>