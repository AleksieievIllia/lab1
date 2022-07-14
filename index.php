<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ1</title>
</head>

<body>
    <h3>Алексеев Илья, КИУКИ-19-1, Вар №2</h3>
    <p>Выполненные задачи</p>
    <form method="get" action="1.php">
        <select name="selectdedProject" id="selectdedProject">
            <?php
            include 'connection.php';
            $sqlSelect = "SELECT DISTINCT * FROM $db.projects";
            foreach ($dbh->query($sqlSelect) as $cell) {
                echo "<option>";
                print($cell[1]);
                echo "</option>";
            }
            ?>
        </select>
        <select name="date" id="date">
            <?php
            include 'connection.php';
            $sqlSelect = "SELECT DISTINCT $db.work.date FROM $db.work";
            foreach ($dbh->query($sqlSelect) as $cell) {
                echo "<option>";
                print($cell[0]);
                echo "</option>";
            }
            ?>
        </select>
        <input type="submit" value="ok">
    </form>

    <p>Время работы над проектом</p>
    <form method="get" action="2.php">
        <select name="project" id="project">
            <?php
            include 'connection.php';
            $sqlSelect = "SELECT DISTINCT * FROM $db.projects";
            foreach ($dbh->query($sqlSelect) as $cell) {
                echo "<option>";
                print_r($cell[1]);
                echo "</option>";
            }
            ?>
        </select>
        <input type="submit" value="ok">
    </form>

    <p>Количество сотрудников отдела с руководителем</p>
    <form method="get" action="3.php">
        <select name="chief" id="chief">
            <?php
            include 'connection.php';
            $sqlSelect = "SELECT DISTINCT * FROM $db.department";
            foreach ($dbh->query($sqlSelect) as $cell) {
                echo "<option>";
                print($cell[1]);
                echo "</option>";
            }
            ?>
        </select>
        <input type="submit" value="ok">
    </form>

</body>

</html>