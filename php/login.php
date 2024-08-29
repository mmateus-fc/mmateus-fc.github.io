
<?php

    include_once 'connection.php';

    $is_invalid = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize the input data
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        //echo "<p>Email: $email</p>";
        //echo "<p>Password: $password</p>";

        $sql = "SELECT * FROM admin_register WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0)
        {
            //echo "<p>Login successful</p>";
            session_start();

            $_SESSION['User_ID'] = $email;

            header ("Location: admin.php");
            exit;
        }
        else
        {
            //echo "<p>Login failed</p>";
        }
        $is_invalid = true;
    }
?>

<?php
    //echo $_SESSION['User_ID'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta 
        charset="utf-8"
        name="viewport" 
        content="width=device-width"
    >
    
    <title> 
        Login
    </title>

    <link
        href = '../css/reset.css'
        rel = 'stylesheet'
        type= 'text/css'        
    >
    
    <link
        href = '../css/background-blog.css'
        rel = 'stylesheet'
        type= 'text/css'
    >

    <link
        href = '../css/login.css'
        rel = 'stylesheet'
        type= 'text/css'
    >

    <!-- Icons: FontAwesome-->
    <script src="https://kit.fontawesome.com/8a7c27490c.js" crossorigin="anonymous"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Inter:wght@100..900&family=Kaushan+Script&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Satisfy&display=swap" rel="stylesheet">

</head>

<body>
    <div
        class="container">
        <header>
            <nav>
                <ul
                    class="inline-list">
                    <li>
                        <a href="../home.html">Home</a>
                    </li>
                    <li>
                        <a href="../aboutme.html">About Me</a>
                    </li>
                    <li>
                        <a href="../education.html">Education</a>
                    </li>
                    <li>
                        <a href="../research.html">Research</a>
                    </li>                   
                    <li>
                        <a href="../experience.html" >Experience</a>
                    </li>
                    <li>
                        <a href="../skills.html">Skills and Achievements</a>
                    </li>
                    <li>
                        <a href="../portfolio.html">Portfolio</a>
                    </li>
                    <li>
                        <a href="../cv.html">CV</a>
                    </li>
                    <li>
                        <a href="../contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                </ul>
            </nav>
        </header>
    
        <article
            id="main">
            <div
                class="container-login">
                <div
                    class="form-login">
                    <form
                        method = "POST">  

                        <fieldset>
                            <legend>Login</legend>

                            <br>
                            <div
                                class="invalid">
                                <?php
                                    if($is_invalid)
                                    {
                                        echo "<h3>Invalid login</h3>";
                                    }
                                ?>
                            </div>
                            <br>
                                
                            <label>Email Adress</label>
                            <br>
                            <input type="text" name="email" placeholder="your@email" required>

                            <br><br>
                            <label>Password</label>
                            <br>
                            <input type="text" name="password" placeholder="password" required>

                            <br><br>
                            <div class="buttons">
                                <button class="btn">Login</button>
                            </div>
                        </fieldset>
                    </form>


                </div>
            </div>          
        </article>
    
        <footer>
            <section>
                <nav>
                    <a href = "home.html">Home</a>
                </nav>
            </section>
            <section>
                <em>
                    Mateus Franco e Cunha 2024 &copy  
                    <!-- 
                        Symbol | Representation
                            ©           &copy
                    -->
                </em>
            </section>
        </footer>        
    </div>
</body>
</html>

