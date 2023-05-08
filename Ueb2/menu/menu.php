<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <style>
        nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background:transparent;
    border:2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
}

nav a.logo {
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: #fff;
    margin-left: 5%;
}
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            display: inline;
            margin-right: 50px;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
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
        array('Courses', '#'),
        array('Teachers', '#'),
        array('Reviews', '#'),
        array('Contact', '#')


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
</body>
</html>
