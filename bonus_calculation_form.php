<!DOCTYPE html>
<html>
<head>
    <title>Bonus Calculation Form</title>
</head>
<body>
    <h2>Bonus Calculation Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name"><br><br>
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female<br><br>
        Department:
        <select name="department">
            <option value="sales">Sales</option>
            <option value="management">Management</option>
        </select><br><br>
        Salary: <input type="number" name="salary"><br><br>
        <input type="submit" name="submit" value="Calculate Bonus">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $department = $_POST["department"];
        $salary = $_POST["salary"];
        $bonus = 0;
        
        if ($gender == "male" && $department == "sales") {
            $bonus = $salary * 0.10;
        } elseif ($gender == "female" && $department == "sales") {
            $bonus = $salary * 0.159;
        } elseif ($gender == "male" && $department == "management") {
            $bonus = $salary * 0.202;
        } elseif ($gender == "female" && $department == "management") {
            $bonus = $salary * 0.157;
        }

        $total_salary = $salary + $bonus;
        echo "<br><br>Bonus Amount: $bonus<br>";
        echo "Total Salary: $total_salary";
    }
    ?>
</body>
</html>
