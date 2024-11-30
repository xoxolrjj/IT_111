<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Attendance</title>
    <link rel="stylesheet" href="css/styles_attendance.css?v=1.1">
</head>
<body>

    <div class="header">
        <h1>Edit Attendance</h1>
    </div>

    <div class="main-content">
        <div class="edit-attendance">
            <h2>Edit Attendance Details</h2>
            <form action="process_edit_attendance.php" method="POST">
                <input type="hidden" name="attendance_id" value="<?= htmlspecialchars($attendance->AttendanceID) ?>">

                <label for="employee-id">Employee ID:</label>
                <input type="text" id="employee-id" name="employee_id" value="<?= htmlspecialchars($attendance->EmployeeID) ?>" required>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" value="<?= htmlspecialchars($attendance->Date) ?>" required>

                <label for="time-in">Time-in:</label>
                <input type="time" id="time-in" name="time_in" value="<?= htmlspecialchars($attendance->TimeIn) ?>" required>

                <label for="time-out">Time-out:</label>
                <input type="time" id="time-out" name="time_out" value="<?= htmlspecialchars($attendance->TimeOut) ?>" required>

                <div class="form-actions">
                    <button type="submit" class="save-btn">Update</button>
                    <button type="button" class="cancel-btn" onclick="window.location.href='attendance.php';">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
