<style>
	body {
		margin: 0;
	}
	
	/* Add a black background color to the top navigation */
	.topnav {
		background-color: black;
		overflow: hidden;
	}

	/* Style the links inside the navigation bar */
	.welcome {
		float: left;
		color: white;
		text-align: center;
		padding: 14px 16px;
		margin-left: 25px;
		font-size: 17px;
	}
	.logout {
		float: right;
		color: white;
		text-align: center;
		padding: 14px 16px;
		margin-right: 25px;
		text-decoration: none;
		font-size: 17px;
	}
	
	/* Change the color of links on hover */
	.topnav a:hover {
		background-color: lightgray;
		color: black;
	}
</style>

<div class="topnav">
	<span class="welcome">Welcome, <?php echo $_SESSION['username']; ?></span>
	<a class="logout" href="logout.php">Log Out</a>
</div>