<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles_employees.css">
  <title>Employee Management</title>
</head>
<body>
  <div class="container">
    <!-- Include the Sidebar -->
 
    <!-- Main Content -->
    <div class="main-content">
      <header>
        <h1>Employees</h1>
      </header>
      <div class="employee-overview">
        <!-- Employee Card Wrapper -->
        <div class="employee-card-wrapper">
          <div class="employee-card">
            <img src="images/avatar-placeholder.png" alt="Employee Avatar">
            <h2>2341421</h2>
            <p>Name: <strong>Ahmed Rashdan</strong></p>
            <p>Position: <strong>Help Desk Executive</strong></p>
            <p>Department: <strong>IT Department</strong></p>
            <button>Edit</button>
          </div>
        </div>

        <div class="employee-table">
          <!-- Updated the structure to include the "Add Employee" link -->
          <div class="search-add">
            <input type="text" placeholder="Quick Search...">
            <!-- Add Employee button is now a link -->
            <a href="add_employees.php" class="add-btn">Add Employee</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Employee</th>
                <th>Position</th>
                <th>Department</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2341421</td>
                <td>Ahmed Rashdan</td>
                <td>Help Desk Executive</td>
                <td>IT Department</td>
                <td><button>Edit</button></td>
              </tr>
              <tr>
                <td>3411421</td>
                <td>Ali Alhamdan</td>
                <td>Senior Executive</td>
                <td>Marketing</td>
                <td><button>Edit</button></td>
              </tr>
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
