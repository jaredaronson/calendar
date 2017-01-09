<!DOCTYPE html>
<html>
<head>
    <title>PHP Calendar</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="calendar.css">
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

    //counts day of month
    $dayNum = 1;

    //counts itterations of loop
    $count = 0;


?>

<div class="contain">

    <div class="calendar">


    <?php

        for($x = 0; $x < 42; $x++){

            //creates empty boxes in beginning
            if($count < $currentfirstDay){

                echo "<div class=\"box\"></div>";

            //creates numbered boxes
            }else if($dayNum <= $currentDaysInMonth){

                echo "<div class=\"box\">".$dayNum."</div>";
                $dayNum++;

            //creates empty boxes at end
            } else{

                echo "<div class=\"box\"></div>";

            }

            $count++;
        }

    ?>

    </div>

</div>

</body>
</html>