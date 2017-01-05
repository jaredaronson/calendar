<!DOCTYPE html>
<html>
<head>
    <title>PHP Calendar</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>

<?php

    date_default_timezone_set("America/New_York");

    $currentDayOfTheMonth = date(j);
    echo $currentDayOfTheMonth;
    $currentYear = date(Y);
    $currentMonth = date(F);

    $time = strtotime("1 " .$currentMonth." ".$currentYear);

?>

</body>
</html>