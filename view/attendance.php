<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="../css/styles_attendance.css">
</head>
<body>
    <!-- Include the menu -->
 
    <!-- Main content -->
    <div class="main-content">
        <div class="header">
            Attendance
        </div>

        <div class="table-container">
            <div class="top-controls">
                <input type="text" placeholder="Quick Search..." id="search">
                <div>
                    <button onclick="addAttendance()">+ Add Attendance</button>
                    <button onclick="viewAttendance()">View Attendance</button>
                </div>
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
                        <td><a href="edit_attendance.php?id=1" class="edit-link">Edit</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>3411421</td>
                        <td>29 July 2023</td>
                        <td>00:00</td>
                        <td>00:00</td>
                        <td><a href="edit_attendance.php?id=2" class="edit-link">Edit</a></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
