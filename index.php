<?php

    $include = true;
    $page = array(
        'id' => 'null',
        'inc' => 'null',
        'name' => 'null'
    );

    if(isset($_GET['p'])) {
        $page['id'] = htmlspecialchars($_GET['p']);
    } else {
        $page['id'] = 'index';
    }

    switch($page['id']) {
        case 'index':
            $page['inc'] = 'inc/index.php';
            $page['name'] = 'Home';
            break;
        case 'spec':
            $page['inc'] = 'inc/spec.php';
            $page['name'] = 'Specifications';
            break;
        case 'pw':
            $page['inc'] = 'inc/pw.php';
            $page['name'] = 'PsychonautWiki';
            break;
        case 'gb':
            $page['inc'] = 'inc/groupbuy.php';
            $page['name'] = 'GroupBuy';
            break;
        default:
            $page['inc'] = 'inc/404.php';
            $page['name'] = 'Error';
    }

?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en"> <![endif]-->
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JoesPC | <?php echo $page['name'];?></title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/joespc.css">

    <script src="js/vendor/modernizr.js"></script>
</head>

<body>

    <div class="fixed">
        <nav class="top-bar" data-topbar role="navigation">

            <ul class="title-area">
                <li class="name">
                    <h1><a href="?p=index">JoesPC</a></h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <ul class="right">
                    <li>
                        <a href="#">・゜゜・ ​ 。。・゜゜\_o​<</a>
                    </li>
                </ul>
                <ul class="left">
                    <li>
                        <a href="?p=spec">Specs</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Projects</a>
                        <ul class="dropdown">
                            <li><a href="?p=pw">PsychonautWiki</a></li>
                        </ul>
                    </li>
                </ul>
            </section>

        </nav>
    </div>

    <!--<header>
        <div class="row">
            <div class="small-3 large-3 columns">P. Josepherum</div>
            <div class="small-9 large-9 columns"><a href="mailto:papaverjosepherum@gmail.com">papaverjosepherum@gmail.com</a></div>
        </div>
    </header>-->

    <div class="panel">
        <?php include($page['inc']); ?>
    </div>

    <footer>
        <div class="row">
            <div class="small-12 large-12 columns">
                <p><a href="mailto:papaverjosepherum@gmail.com">papaverjosepherum@gmail.com</a></p>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>

</html>