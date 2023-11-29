
<?php
    
    
    session_start();

    if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
    
    }


?>



<form action = '<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
        <h3>Login Here</h3>

        <?php echo $message1 ?? null; ?>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name = 'username'>

        <br>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name = 'password'>

        <br>

        <button>Log In</button>
        
        
    </form>

    <?php
        if (isset($_POST["msg"]) && $_POST["msg"] == 'failed') {
            echo "Wrong Username / Password";
            }
    ?>