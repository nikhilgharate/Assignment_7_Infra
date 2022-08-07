<html>
    <head>
        <title>Employee</title>
    </head>

    <body>
        <h1>Employee List</h1>
        <ul>
            <?php

            $json = file_get_contents('http://Employee-service/');
            $obj = json_decode($json);

            $Employee = $obj->Employee;

            foreach ($Employee as $Employee) {
                echo "<li>$Employee</li>";
            }

            ?>
        </ul>
    </body>
</html>
