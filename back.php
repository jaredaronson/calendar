<!DOCTYPE html>
<html>
<head>
    <title>PHP Calendar</title>
    <link rel="stylesheet" type="text/css" href="calendar.css">
    <script src="https://use.fontawesome.com/b7fbe40ec5.js"></script>
</head>
<body>

<?php

    $year = $_GET['year'];
    $month = $_GET['month'];

if($month == "January"){

    $year--;

}

switch($month){

    case "January":
    $month="December";
    break;

    case "December":
    $month="November";
    break;

    case "November":
    $month="October";
    break;

    case "October":
    $month="September";
    break;

    case "September":
    $month="August";
    break;

    case "August":
    $month="July";
    break;

    case "July":
    $month="June";
    break;

    case "June":
    $month="May";
    break;

    case "May":
    $month="April";
    break;

    case "April":
    $month="March";
    break;

    case "March":
    $month="February";
    break;

    case "February":
    $month="January";
    break;
}

    $time = strtotime("1 " .$month." ".$year);
    /////////////////

    $theYear = date(Y, $time); //2016
    $theMonth = date(n, $time); //1-12
    $monthText = date(F, $time); //December
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN,$theMonth,$theYear);


    ///figures out first day of month 0-6
    $firstDay = date(w, $time);
    /////////////////////////////////

    //counts day of month
    $dayNum = 1;

    //counts itterations of loop
    $count = 0;

?>

    <div class="contain">

        <div class="calendar">

            <header>

                <?php

            echo "<a class=\"link\" href=\"back.php?year=".$theYear."&month=".$monthText."\"><i class=\"fa fa-hand-o-left\" aria-hidden=\"true\"></i>
</a> ";

            echo $monthText ." ". $theYear;

            echo " <a class=\"link\" href=\"next.php?year=".$theYear."&month=".$monthText."\"><i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>
</a> ";

                ?>

            </header>

            <?php

                for($x = 0; $x < 42; $x++){

                    //creates empty boxes in beginning
                    if($count < $firstDay){

                        echo "<div class=\"box\"></div>";

                    //creates numbered boxes
                    }else if($dayNum <= $daysInMonth){

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