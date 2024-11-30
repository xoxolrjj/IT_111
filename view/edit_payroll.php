<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Payroll</title>
    <link rel="stylesheet" href="css/styles_payroll.css?v=1.1">
</head>
<body>

    <div class="header">
        <h1>Edit Payroll Record</h1>
    </div>

    <div class="main-content">
        <div class="edit-payroll">
            <h2>Edit Payroll Details</h2>
            <form action="process_edit_payroll.php" method="POST">
                <input type="hidden" name="payroll_id" value="<?= htmlspecialchars($payroll->PayrollID) ?>">

                <label for="employee-id">Employee ID:</label>
                <input type="text" id="employee-id" name="employee_id" value="<?= htmlspecialchars($payroll->EmployeeID) ?>" required>

                <label for="salary">Salary:</label>
                <input type="number" id="salary" name="salary" value="<?= htmlspecialchars($payroll->Salary) ?>" required>

                <label for="deduction">Deduction:</label>
                <input type="number" id="deduction" name="deduction" value="<?= htmlspecialchars($payroll->Deduction) ?>" required>

                <label for="net-pay">Net Pay:</label>
                <input type="number" id="net-pay" name="net_pay" value="<?= htmlspecialchars($payroll->NetPay) ?>" required>

                <div class="form-actions">
                    <button type="submit" class="save-btn">Update Payroll</button>
                    <button type="button" class="cancel-btn" onclick="window.location.href='index.php';">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>