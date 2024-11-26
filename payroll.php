<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll</title>
    <link rel="stylesheet" href="styles_payroll.css">
</head>
<body>
    <!-- Include the menu bar -->
    <?php include 'menu.html'; ?>

    <div class="content">
        <div class="header">Payroll</div>
        <div class="table-container">
            <div class="top-controls">
                <button class="btn-primary"><i class="print-icon"></i> Print</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee</th>
                        <th>Month</th>
                        <th>Salary</th>
                        <th>Hours</th>
                        <th>Deduction</th>
                        <th>Total Pay</th>
                        <th>Pay Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2341421</td>
                        <td>Ahmed Rashdan</td>
                        <td>December, 2024</td>
                        <td>₱ 10,000</td>
                        <td>40 hrs</td>
                        <td>₱ 0</td>
                        <td>₱ 10,000</td>
                        <td>29 July 2023</td>
                        <td class="status-paid">Paid</td>
                        <td><a href="#" class="edit-link">Edit</a></td>
                    </tr>
                    <!-- Add additional rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
