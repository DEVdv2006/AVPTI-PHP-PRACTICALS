<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> EMPLOYEE FORM</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="practical9.1.saveToDB.php" method="post">
            <label for="empid">EMPID</label>
            <input type="number" name="empid" id="empid">
            <br>
            <label for="empname">EMPNAME</label>
            <input type="text" name="empname" id="empname">
            <br>
            <label for="branch">BRANCH</label>
            <input type="text" name="branch" id="branch">
            <br>
            <label for="salary">SALARY</label>
            <input type="number" name="salary" id="salary">
            <br>
            <button type="submit">submit</button>
        </form>
    </body>
</html>