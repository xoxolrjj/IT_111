<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Leave Application</title>
    <link rel="stylesheet" href="css/styles_leave.css?v=1.1">
</head>
<body>

    <div class="header">
        <h1>Edit Leave Application</h1>
    </div>

    <div class="main-content">
        <div class="edit-leave">
            <h2>Edit Leave Details</h2>
            <form action="process_edit_leave.php" method="POST">
                <input type="hidden" name="leave_id" value="<?= htmlspecialchars($leave->LeaveID) ?>">

                <label for="employee-id">Employee ID:</label>
                <input type="text" id="employee-id" name="employee_id" value="<?= htmlspecialchars($leave->EmployeeID) ?>" required>

                <label for="start-date">Start Date:</label>
                <input type="date" id="start-date" name="start_date" value="<?= htmlspecialchars($leave->StartDate) ?>" required>

                <label for="end-date">End Date:</label>
                <input type="date" id="end-date" name="end_date" value="<?= htmlspecialchars($leave->EndDate) ?>" required>

                <div class="form-actions">
                    <button type="submit" class="save-btn">Update Application</button>
                    <button type="button" class="cancel-btn" onclick="window.location.href='index.php';">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>