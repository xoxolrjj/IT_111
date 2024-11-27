<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Management</title>
    <link rel="stylesheet" href="../css/styles_leave.css">
</head>
<body>
    <div class="container">
         <div class="main-content">
            <header>
                <h1>Leave</h1>
            </header>
            <div class="leave-section">
                <div class="header-actions">
                    <button class="btn-primary">+ Add Application</button>
                    <button class="btn-secondary">Filter</button>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Employee</th>
                            <th>Leave Type</th>
                            <th>Apply Date</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Duration</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2341421</td>
                            <td>Ahmed Rashdan</td>
                            <td>Sick Leave</td>
                            <td>29 July 2023</td>
                            <td>29 July 2023</td>
                            <td>29 July 2023</td>
                            <td>10 days</td>
                            <td>
                                <button class="btn-approve">Approve</button>
                                <button class="btn-reject">Reject</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
