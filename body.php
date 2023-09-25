<body>
    <h1>Welcome</h1>
    <div class="container">
        <?php 
        require_once("menu.php");
        switch($menuItem){
            case 'home':
                require_once('home.php');
                break;
            case 'termekek':
                require_once('termekek.php');
                    break;
            case 'login':
                    require_once('login.php');
                    break;
            default:
                echo "Üdvözölek az oldalon";
                break;

        }
         ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>