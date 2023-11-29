<?php

    session_start();

    $username = $email=$password=$phone=$confirm_password= '';

    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['confirm_password']) && isset($_POST['submit']))
    {
        
        if ($_POST['password']==$_POST['confirm_password']){
        

        $username=htmlspecialchars($_POST['username']);
        $_SESSION['username'] = $username;
        

        $password=htmlentities($_POST['password']);
        $_SESSION['password'] = $username;
       

        $email = htmlspecialchars($_POST['email']);
        $_SESSION['email'] = $username;
        

        $phone = htmlspecialchars($_POST['phone']);
        $_SESSION['phone'] = $username;
       
        
        header('Location: login_app/index1.php');

    
        }
        else{
            $message = 'Passwords do not match <br>';
        }


    }else{

        $message_username = !empty($_POST['username']) ? null : 'Please enter username <br>?';
        $message_password = !empty($_POST['password']) ? null : 'Please enter password <br>';
        $message_confirm_password = !empty($_POST['confirm_password']) ? null : 'Please confirm password <br>';
        $message_email = !empty($_POST['emial']) ? null : 'Please enter email <br>';
        $message_phone = !empty($_POST['phone']) ? null : 'Please enter phone <br>';

    }




?>


<form action = '<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
        <h3>Register</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username" name = 'username'>

        <label for="email">Email</label>
        <input type="text" placeholder="Email" id="email" name ='email'>

        <label for="phone">Phone</label>
        <input type="text" placeholder="Phone number" id="phone" name ='phone'>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name = 'password'>

        <label for="confirm_password">Confirm password</label>
        <input type="confirm_password" placeholder="Confirm password" id="confirm_password" name = 'confirmpassword'>

        
        <div class="submit">
            <input type="submit" name="submit" value='Register'></input>
        </div>
        
    </form>