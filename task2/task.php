<html>
<head>
    <title></title>
</head>
<body>
    <h1>Dates of this Month</h1>
    <?php

    /* Getting the current month and year. */
    $month = date('n');
    $year = date('y');

    /* Creating a timestamp for the first day of the month. */
    $fday = mktime(0, 0, 0, $month, 1, $year);

    /* Getting the day of the week for the first day of the month. */
    $fday = date('D', $fday);

    /* Getting the number of days in the month. */
    $daysinmnth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

    /* Creating an array of the days of the week. */
    $weekdays = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');

    /* Creating a table. */
    echo '<table>';

    /* Creating a new row in the table. */
    echo '<tr>';

    /* Looping through the array of weekdays and printing each one in a table header cell. */
    foreach ($weekdays as $weekday) {
        echo '<th>' . $weekday . '</th>';
    }
    echo '</tr><tr>';

    /* This is a for loop that is looping through the days of the month. */
    for ($i = 1; $i <= $daysinmnth; $i++) {
        $dayname = date('D', mktime(0, 0, 0, $month, $i, $year));

        /* Assigning a color to each day of the week. */
        switch ($dayname) {
            case 'Sun':
                $bg = 'red';
                break;
            case 'Mon':
                $bg = 'green';
                break;
            case 'Tue':
                $bg = 'pink';
                break;
            case 'Wed':
                $bg = 'blue';
                break;
            case 'Thu':
                $bg = 'yellow';
                break;
            case 'Fri':
                $bg = 'purple';
                break;
            case 'Sat':
                $bg = 'red';
                break;
        }
        echo '<td style="background-color: ' . $bg . '">' . $i . '</td>';

        /* This is a conditional statement that is checking to see if the day of the week is Saturday. If it
        is, then it is closing the current row and starting a new one. */
        if (date('D', mktime(0, 0, 0, $month, $i, $year)) == 'Sat') {
            echo '</tr><tr>';
        }
    }

    /* Closing the table row and the table. */
    echo '</tr></table>';
    ?>
</body>

</html>