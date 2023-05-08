<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
<nav>
    <a href="#" class="logo">
    <h1>FindYourWay</h1>
  </a>
    <?php
    // Define the menu items
    $menuItems = array(
        array('Home', '#'),
        array('About', '#'),
        array('Rating', '#'),
        array('Assignments', '#'),
        array('Courses', '#'),
        array('FAQ', '#')



    );
    ?>

    <ul>
        <?php
        // Generate the menu items
        foreach ($menuItems as $item) {
            $label = $item[0];
            $url = $item[1];
            echo '<li><a href="' . $url . '">' . $label . '</a></li>';
        }
        ?>
    </ul>
    </nav>
    <section class="quick-select">
        <h1 class="heading">quick options</h1>
        <div class="box-container">
            <div class="box">
                <h3 class="title">Assignments</h3>
                <p>Done:<span>14</span></p>
                <a href="#" class="inline-btn">View done assignments</a>
                <p>Doing:<span>5</span></p>
                <a href="#" class="inline-btn">View doing assignments</a>
                <p>Saved:<span>3</span></p>
                <a href="#" class="inline-btn">View saved assignments</a>
</div>
<div class="box">
                <h3 class="title">Top rating</h3>
                <div class="flex">
                    <a href="#"><i class="fas fa-code"></i><span>Coding</span></a>
                    <a href="#"><i class="fas fa-code"></i><span>Math</span></a>
                    <a href="#"><i class="fas fa-code"></i><span>Electro</span></a>
                </div>      
    </div>
<div class="box">
                <h3 class="title">Topics</h3>
                <div class="flex">
                <a href="#"><i class="fab fa-bootstrap"></i><span>Calculus I</span></a>
                <a href="#"><i class="fab fa-bootstrap"></i><span>Calculus II</span></a>
                <a href="#"><i class="fab fa-bootstrap"></i><span>Electronic</span></a>
                <a href="#"><i class="fab fa-bootstrap"></i><span>Web 1</span></a>
                <a href="#"><i class="fab fa-bootstrap"></i><span>Web 2</span></a>
                <a href="#"><i class="fab fa-bootstrap"></i><span>OOP</span></a>
                <a href="#"><i class="fab fa-bootstrap"></i><span>Database</span></a>
                <a href="#"><i class="fab fa-bootstrap"></i><span>Data Security</span></a>
                <a href="#"><i class="fab fa-bootstrap"></i><span>Digital circuit</span></a>
                <a href="#"><i class="fab fa-bootstrap"></i><span>Software Engineering</span></a>
</div>
    </div>

</div>
            </div>
</section>


</body>
</html>
