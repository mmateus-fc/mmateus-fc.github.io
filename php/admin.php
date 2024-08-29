<?php 

session_start();

//print_r($_SESSION);

if (isset($_SESSION['User_ID']))
{
    $user = $_SESSION['User_ID'];
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
        Admin
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
        href = '../css/admin.css'
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
                    <li>
                        <a href="admin.php">Admin</a>
                    </li>
                    <li>
                        <a href="inquiries.php">Inquiries</a>
                    </li>
                </ul>
            </nav>
        </header>
    
        <article
            id="main">
            <div
                class="container-blog">
                <div 
                    class="post-side-grid">
                    <div 
                        class="post">
                        <div class="post-each">
                            <h1>Welcome! You are logged in.</h1>
                            <?php
                                echo "<h2>User: $user</h2>";
                            ?>
                        </div>
                        
                        <div class="action">
                            <div>
                                <a href="inquiries.php">
                                <button class="button-go">Inquiries</button>
                                </a>
                            </div>
                            <div>
                                <a href="../add-post.html">
                                <button class="button-go">Add Post</button>
                                </a>
                            </div>
                        </div>
                        

                    </div>

                    <aside>
                        <div
                            class="side">
                            <div
                                class="login">
                                <h1>User Logout</h1>
                                <a href="logout.php">
                                <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>      
        </article>
    
        <footer>
            <section>
                <nav>
                    <a href = "../home.html">Home</a>
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

