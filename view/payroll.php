<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll</title>
    <link rel="stylesheet" href="css/styles_payroll.css?v=1.1">
    <style>
        /* Add your styles here, or link to your CSS file */
        .filter-input {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 200px; /* Width of the filter input */
        }
        .filter-options {
            margin-right: 10px;
        }
        .search-btn {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .soft-btn {
            padding: 10px 15px;
            background-color: #f0f0f0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Payroll Management</h1>
    </div>

    <div class="main-content">
        <!-- Add Payroll Card -->
        <div class="add-payroll">
            <h2>Add Payroll</h2>
            <form action="index.php?command=addPayroll" method="POST">
                <input type="text" name="payroll_id" placeholder="Payroll ID" required>
                <input type="text" name="employee_id" placeholder="Employee ID" required>
                <input type="number" name="salary" placeholder="Salary" required>
                <input type="number" name="deduction" placeholder="Deduction" required>
                <input type="number" name="net_pay" placeholder="Net Pay" required>
                
                <div class="form-actions">
                    <button type="submit" class="save-btn">Add</button>
                    <button type="reset" class="cancel-btn">Cancel</button>
                </div>
            </form>
        </div>

        <!-- Table Container -->
        <div class="table-container">
            <div class="top-controls">
                <input type="text" id="filterInput" class="filter-input" placeholder="Quick Search..." onkeyup="filterTable()">
                <button class="search-btn" onclick="filterTable()">Search</button>
                <button class="soft-btn">Filter</button>
            </div>
            <table id="payrollTable">
                <thead>
                    <tr>
                        <th>Payroll ID</th>
                        <th>Employee ID</th>
                        <th>Salary</th>
                        <th>Deduction</th>
                        <th>Net Pay</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>₱10,000</td>
                    <td>₱1,000</td>
                    <td>₱9,000</td>
                    <td>
                        <a href="edit_payroll.php?payroll_id=1" class="edit-btn">Edit</a>
                        <button class="delete-btn">Delete</button>
                    </td>
                   </tr>
                   <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>₱12,000</td>
                    <td>₱1,200</td>
                    <td>₱10,800</td>
                    <td>
                        <a href="edit_payroll.php?payroll_id=2" class="edit-btn">Edit</a>
                        <button class="delete-btn">Delete</button>
                    </td>
                   </tr>
                   <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>


</body>
</html>
