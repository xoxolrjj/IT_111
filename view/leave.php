<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Management</title>
    <link rel="stylesheet" href="css/styles_leave.css?v=1.1">
</head>
<body>
    <div class="header">
        <h1>Leave Management</h1>
    </div>

    <div class="main-content">
        <div class="add-leave">
            <h2>Add Application</h2>
            <form action="index.php?command=addLeave" method="POST">
                <input type="text" name="leave_id" placeholder="Leave ID" required>
                <input type="text" name="employee_id" placeholder="Employee ID" required>
                <input type="date" name="start_date" required>
                <input type="date" name="end_date" required>
                
                <div class="form-actions">
                    <button type="submit" class="save-btn">Save Application</button>
                    <button type="reset" class="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>

        <div class="leave-list">
            <h2>Leave List</h2>
            <div class="search-bar">
                <input type="text" placeholder="Quick Search..." />
                <button>Search</button>
                <button>Filter</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Leave ID</th>
                        <th>Employee ID</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    <td>1</td>
                    <td>2341421</td>
                    <td>29 July 2023</td>
                    <td>29 August 2023</td>
                    <td><a href="" class="edit-btn">Edit</a>
                        <a href="" class="delete-btn">Delete</a></td>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
