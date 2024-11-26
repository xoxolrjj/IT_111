<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="styles_attendance.css">
    
</head>
<body>
    <!-- Include the menu -->
    <?php include 'menu.html'; ?>

    <!-- Main content -->
    <div class="content">
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
                        <th>ID</th>
                        <th>Employee</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Date</th>
                        <th>Time-in</th>
                        <th>Time-out</th>
                        <th>Work Hours</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2341421</td>
                        <td>Ahmed Rashdan</td>
                        <td>Help Desk Executive</td>
                        <td>IT Department</td>
                        <td>29 July 2023</td>
                        <td>09:00</td>
                        <td>18:00</td>
                        <td>10h 2m</td>
                        <td><a href="edit_attendance.php?id=2341421" class="edit-link">Edit</a></td>
                    </tr>
                    <tr>
                        <td>3411421</td>
                        <td>Ali Alhamdan</td>
                        <td>Senior Executive</td>
                        <td>Marketing</td>
                        <td>29 July 2023</td>
                        <td>00:00</td>
                        <td>00:00</td>
                        <td>0m</td>
                        <td><a href="edit_attendance.php?id=3411421" class="edit-link">Edit</a></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
