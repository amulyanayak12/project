<!DOCTYPE HTML>
<HTML>
        <BODY>
                <HEAD><TITLE>ADMIN LOGIN</TITLE></HEAD>
		<style>
			body {background-color: rgb(128,0,0); color: white; text-align: center};
		</style>
		<div class="center">
                <H1>ADMIN LOGIN</H1>
		</div>
                <?php
		$DBAuser = "admin";
		$DBApass = "admin";

                $user=$_GET["user"];
                $pass=$_GET["pass"];

                if($user == $DBAuser && $pass == $DBApass)
                {
                        echo "Welcome!";
                }
                else
                {
                        echo "Invalid username or password";
                }
                ?>

        </BODY>
</HTML>

<!DOCTYPE HTML>
<HTML>
        <BODY>
                <form method="get" action="admin.php">
		<select id="admin" name="admin">
  			<option value="add">Add Users</option>
  			<option value="remove">Remove Users</option>
  			<option value="access">Access controls</option>
  			<option value="view">View Users</option>
		</select>
		</form>
        </BODY>
</HTML>