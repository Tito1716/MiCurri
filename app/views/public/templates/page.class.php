<?php 
require_once("app/helpers/component.class.php");
class Page extends Component{
    public static function templateHeader($title){
        print(" <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <script>document.getElementsByTagName('html')[0].className += ' js';</script>
            <title>$title</title>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
                <link type='text/css' rel='stylesheet' media='screen,projection' href='web/css/materialize.min.css'/>
                <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
                <link  href='node_modules/codyhouse-framework/main/assets/css/base'/>
                <link id='codyframe' rel='stylesheet' href='node_modules/codyhouse-framework/main/assets/css/style.css'/>
                <script type='text/javascript' src='web/js/modernizr.js'></script>
                <link rel='stylesheet' href='node_modules/aos/dist/aos.css'/>
                <link rel='stylesheet' media='screen,projection' type='text/css'  href='web/css/inicio.css'/>
                <link rel='stylesheet' media='screen,projection' type='text/css'  href='web/css/timi.css'/>
                <link rel='stylesheet' media='screen,projection' type='text/css'  href='web/css/style.css'/>
                <link rel='preconnect' href='https://fonts.gstatic.com'>
                <link href='https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap' rel='stylesheet'>
                <link  media='screen,projection' type='text/css' rel='stylesheet' href='web/css/main.css'/>
        </head>
        <body>
       
        <main>
        ");
    }
    public static function templateFooter(){
        print("
        </main>
        <footer>
        </footer>
        </body>
        <script type='text/javascript' src='web/js/jquery-3.3.1.min.js'></script>  
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js'></script>
        <script type='text/javascript' src='web/js/materialize.min.js'></script>
        <script type='text/javascript' src='node_modules/aos/dist/aos.js'></script>
        <script type='text/javascript' src='node_modules/codyhouse-framework/main/assets/js/util.js'></script>
        <script type='text/javascript' src='node_modules/codyhouse-framework/main/assets/js/scripts.js'></script>
        <script type='text/javascript' src='web/js/velocity.min.js'></script>
        <script type='text/javascript' src='web/js/main.js'></script>
        ");
    }
}
?>