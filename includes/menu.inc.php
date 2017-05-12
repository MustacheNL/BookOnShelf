<html lang="nl">
<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            <h3>BookOnshelf</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
            <a href="home.php" class="mdl-layout__tab <?php if(stristr($_SERVER['REQUEST_URI'], 'home.php')){ echo "is-active"; } else { echo ""; } ?>">Home</a>
            <a href="settings.php" class="mdl-layout__tab <?php if(stristr($_SERVER['REQUEST_URI'], 'settings.php')){ echo "is-active"; } else { echo ""; } ?>">Mijn account</a>
            <a href="mybooks.php" class="mdl-layout__tab <?php if(stristr($_SERVER['REQUEST_URI'], 'mybooks.php')){ echo "is-active"; } else { echo ""; } ?>">Mijn boeken</a>
            <a href="booklist.php" class="mdl-layout__tab <?php if(stristr($_SERVER['REQUEST_URI'], 'booklist.php')){ echo "is-active"; } else { echo ""; } ?>">Boek huren</a>
            <a href="addbook.php" class="mdl-layout__tab <?php if(stristr($_SERVER['REQUEST_URI'], 'addbook.php')){ echo "is-active"; } else { echo ""; } ?>">Boek toevoegen</a>
            <a href="contact.php" class="mdl-layout__tab <?php if(stristr($_SERVER['REQUEST_URI'], 'contact.php')){ echo "is-active"; } else { echo ""; } ?>">Contact</a>
            <div class="mdl-layout-spacer"></div>
            <a href="housekeeping/index.php" class="mdl-layout__tab" style="color: green;">Dashboard</a>
            <a href="logout.php?logout=true" class="mdl-layout__tab" style="color: red;">Uitloggen</a>
        </div>
    </header>