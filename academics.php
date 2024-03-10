<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics</title>
    <link rel="stylesheet" href="navigation.css">
</head>
<body>

<div class="content">
    <h2>Academics</h2>
    <h3>Click on academics to know about courses</h3>
    <div class="dropdown-container"> <!-- Dropdown container -->
        <button class="dropbtn">Academics</button>
        <div class="dropdown-content">
            <?php
            $courses = array(
                "BCA" => "Bachelor of Computer Applications",
                "BCS" => "Bachelor of Computer Science",
                "MCA" => "Master of Computer Applications",
                "MCS" => "Master of Computer Science"
            );
            foreach ($courses as $courseCode => $courseName) {
                echo "<a href='?course=$courseCode'>$courseName</a>";
            }
            ?>
        </div>
    </div>

    <div id="courseInfo">
    <?php
    if(isset($_GET['course'])) {
        $course = $_GET['course'];

        $classes = array(
            "BCA" => array("FY" => 50, "SY" => 60, "TY" => 70),
            "BCS" => array("FY" => 40, "SY" => 45, "TY" => 50),
            "MCA" => array("FY" => 30, "SY" => 35),
            "MCS" => array("FY" => 20, "SY" => 25)
        );
        $departments = array(
            "BCA" => "Bachelor of Computer Applications",
            "BCS" => "Bachelor of Computer Science",
            "MCA" => "Master of Computer Applications",
            "MCS" => "Master of Computer Science"
        );
        if(isset($classes[$course])) {
            echo "<h3>{$departments[$course]}</h3>";
            echo "<table>";
            echo "<tr><th>Class</th><th>Quota</th></tr>";
            $totalQuota = 0;
            foreach ($classes[$course] as $class => $quota) {
                echo "<tr><td>$class</td><td>$quota</td></tr>";
                $totalQuota += $quota;
            }
            echo "<tr><td>Total Quota</td><td>$totalQuota</td></tr>";
            echo "</table>";
        }
        else {
            echo "<p>Invalid course selection</p>";
        }
    }
    ?>
</div>

</body>
</html>
