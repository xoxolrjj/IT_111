<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management</title>
    <link rel="stylesheet" href="css/styles_attendance.css?v=1.1">
</head>
<body>

    <div class="header">
        <h1>Attendance</h1>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        
        <div class="add-attendance">
            <h2>Add Attendance</h2>
            <form action="process_add_attendance.php" method="POST">
                <label for="attendance-id">Attendance ID:</label>
                <input type="text" id="attendance-id" name="attendance_id" placeholder="Enter Attendance ID" required>

                <label for="employee-id">Employee ID:</label>
                <input type="text" id="employee-id" name="employee_id" placeholder="Enter Employee ID" required>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>

                <label for="time-in">Time-in:</label>
                <input type="time" id="time-in" name="time_in" required>

                <label for="time-out">Time-out:</label>
                <input type="time" id="time-out" name="time_out" required>

                <div class="form-actions">
                    <button type="submit" class="save-btn">Save</button>
                    <button type="reset" class="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>

        <div class="attendance-table">
            <div class="search-bar">
                <input type="text" placeholder="Quick Search..." id="search">
                <button>Search</button>
                <button>Filter</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Attendance ID</th>
                        <th>Employee ID</th>
                        <th>Date</th>
                        <th>Time-in</th>
                        <th>Time-out</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2341421</td>
                        <td>29 July 2023</td>
                        <td>09:00</td>
                        <td>18:00</td>
                        <td>
                            <a href="edit_attendance.php?attendance_id=1" class="edit-btn">Edit</a>
                            <a href="" class="delete-btn">Delete</a>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
