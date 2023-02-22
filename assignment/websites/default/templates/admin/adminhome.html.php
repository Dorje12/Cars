<main class="admin">

    <?php
//using foreach loop for thr admin login
    foreach ($admins as $admin){
        //using if else condition to post the data to database
        if (isset($_POST['submit'])) {
            //if condition to check the password and username
            if ($_POST['username'] == $admin['username'] && $_POST['password'] == $admin['password']) {
                //starting session or making it true
                $_SESSION['loggedin'] = true;
                 //starting session or making it true
                $_SESSION['user'] = $admin['username'];
                 //starting session or making it true
                $_SESSION['id'] = $admin['id'];
                 //starting session or making it true
                $_SESSION['master'] = $admin['master'];
            }
        }
    }
//if consition to make session condition valid
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>
    <section class="left">
        <ul>
            <li><a href="manufacturers.php">Manufacturers</a></li>
            <!-- inside li tag a tag it used to link the php files to menu bar -->
            <li><a href="cars.php">Cars</a></li>
            	<!-- inside li tag a tag it used to link the php files to menu bar -->
            <li><a href="archived.php">Archived Cars</a></li>
            	<!-- inside li tag a tag it used to link the php files to menu bar -->
            <li><a href="admins.php"> Admins</a></li>
            	<!-- inside li tag a tag it used to link the php files to menu bar -->
            <li><a href="enquiries.php"> Enquiries</a></li>
            	<!-- inside li tag a tag it used to link the php files to menu bar -->
            <li><a href="articles.php"> Create Article</a></li>
            	<!-- inside li tag a tag it used to link the php files to menu bar -->
            <li><a href="adminlogout.php"> Log Out</a></li>
        </ul>
    </section>

    <section class="right">
        <h2>You are currently logged in</h2>
        </section>
    </main>

    <?}else{    ?><h1>Log in</h1>
<!-- creating from  to take the user name and password -->
    <form action="adminhome.php" method="post" style="padding: 40px">
        <label>Enter Username</label>
        <!-- taking input from user to check validation -->
        <input type="text" name="username" />
        <label>Enter Password</label>
            <!-- taking input from user to check validation -->
        <input type="password" name="password" />
            <!-- submitting the  file from button -->
        <input type="submit" name="submit" value="Log In" />
    </form>
    <?php
    }
    ?>
    </main>