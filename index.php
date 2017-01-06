<!DOCTYPE html>
<html>
<head>
    <title>PHP Calendar</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>

<?php

    date_default_timezone_set("America/New_York");

    //////////////
    $currentDayOfTheMonth = date(j); //1-31
    $currentYear = date(Y); //2017
    $currentMonth = date(F); //December
    $currentMonth2 = date(n); //1-12
    //////////////

    ///calculates how many days in current month
    $currentDaysInMonth = cal_days_in_month(CAL_GREGORIAN,$currentMonth2,$currentYear);
    ////////////////////////

    ///figures out firt day of month 0-6
    $timeStamp = strtotime("1 " . $currentMonth . " " . $currentYear);
    $currentfirstDay = date(w, $timeStamp);
    /////////////////////////////////

?>

</body>
</html>