<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
        <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <div class = "main-content"> 
        <div class="add-department">
                    <h2>Edit Department</h2>
        <form action="index.php?command=saveRec" method="POST">
        <input type="text" name="department_id" value="<?= htmlspecialchars($department->DepartmentID) ?>">
        <input type="text" name="department_name" value="<?= htmlspecialchars($department->Name) ?>" required>
       <div class="form-actions">
                    <button type="submit" class="save-btn">Save</button>
                    <button type="index.php?command=0" class="cancel-btn">Cancel</button>
                            <!-- <a href="index.php?command=0">Cancel</a>   -->
        </div>
        </form>
        </div>
    </div>
</body>
</html>
