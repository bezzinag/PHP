
<html>
    <head>
        <title>Using Get and Post</title>

    </head>

    <body>
        <form action = "index.php" method="post"> 
            <label for="username">Username:</label> 
            <input type="text" name="username" id="username">
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <br><br>
            <button type="submit">Submit</button>
        </form>

    </body>
</html>

<?php

/* $_GET and $_POST are superglobal arrays
   - >they are used to collect form data after submitting an HTML form
        -> $_GET sends the form data as URL parameters
        -> $_POST sends the form data as HTTP post transaction
        -> $_GET is visible to everyone, $_POST is not visible
        -> $_GET has limits on the amount of data to send, $_POST has no limits
        -> $_GET is faster than $_POST
        -> $_GET should not be used for sensitive data, $_POST is more secure
        -> $_GET can be bookmarked, $_POST cannot be bookmarked
*/
    //echo $_GET ["username"];
   // echo "<br>";
   // echo $_GET ["password"];
  
    echo $_POST ["username"];
    echo "<br>";
    echo $_POST ["password"];
?>