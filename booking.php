<!DOCTYPE HTML>
<HTML>
<head>
    <title>Book a Consultation</title>
    <style>
        body  
        {
            background-color: #f5f5f5;
            height: 100%;
            background-position: center;
            background-size: cover;
            position: sticky;
            color: #333;
            font-family: Arial, sans-serif;
        }
        .flex-container 
        {
            display: flex;
            background-color: #00bfff;
        }
        .flex-container > div 
        {
            background-color: #00bfff;
            margin: 10px;
            padding: 10px;
            font-size: 15px;
        }
        #stickybar
        {
            text-align: center;
            background-color: #00bfff;
            color: #fff;
            padding: 20px;
        }
        #content
        {
            background-color: #fff;
            color: #333;
            padding: 20px;
            margin: 30px;
            text-align: center;
        }
    </style>
    <BODY>
            <div id="stickybar">
                <h1>Hospital Finder</h1>
            </div>

            <div class="flex-container">
                <div><a href="index.html">
                    Home
                </a></div>
                <div><a href="aboutPage.html">
                    About Us
                </a></div>
                <div><a href="find-hospital.html">
                    Find a Hospital
                </a></div>
                <div><a href="booking.html">
                    Book a Consultation</a></div>
                <div><a href="contact.html">
                    Contact Us
                </a></div>
            </div>
        <?php
            $serverName = "SOME-PC"; 
            $database = "p1";
            $uid = "";
            $password = "";
            $connectionOptions = array(
                "Database" => $database,
                "Uid" => $uid,
                "PWD" => $password
            );
        
            // Create connection
            $conn = sqlsrv_connect($serverName, $connectionOptions);
        
            // Check connection
            if (!$conn) {
                die("Connection failed: " . print_r(sqlsrv_errors(), true));
            }

        ?>
    </BODY>
</HTML>

<?php
// Close the database connection
sqlsrv_close($conn);
?>