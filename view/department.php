<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Management</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="wrapper">
        <div class="main-content">
            <div class="header">
                <h1>Departments</h1>
            </div>
            <div class="content-area">
                <div class="add-department">
                    <h2>Add Department</h2>
            <form action="index.php?command=addRec" method="POST">
                <input type="text" name="department_id" placeholder="Department ID" required>
                <input type="text" name="department_name" placeholder="Department Name" required>
                <div class="form-actions">
                    <button type="submit" class="save-btn">Add</button>
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
                                 <th>Department ID</th>

                                 <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($departments)): ?>
                                <?php foreach ($departments as $department): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($department->Name) ?></td>
                                    <td><?= htmlspecialchars($department->DepartmentID) ?></td>

                                         <td>
                                            <form action="index.php?command=editRec" method="POST" style="display: inline;">
                                                <input type="hidden" name="department_id" value="<?= htmlspecialchars($department->DepartmentID) ?>">
                                                <button type="submit" class="edit-btn">✏️</button>
                                            </form>     
                                          <form action="index.php?command=deleteRec" method="POST" style="display: inline;">
        <input type="hidden" name="department_id" value="<?= htmlspecialchars($department->DepartmentID) ?>">
        <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this department?');">🗑️</button>
    </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3">No departments found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
