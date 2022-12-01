<html>
    <body>
        <h1>
            This is Q3 2nd ans
        </h1>
        <?php
           
            $hour = date('e');
            if ($hour >= 20) {
            $greetings = "Good Night";
            } elseif ($hour > 17) {
            $greetings = "Good Evening";
            } elseif ($hour > 11) {
            $greetings = "Good Afternoon";
            } elseif ($hour > 12) {
            $greetings = "Good Morning";
            }
            echo $greetings;
            echo $hour;
           
        ?>
    </body>
</html>