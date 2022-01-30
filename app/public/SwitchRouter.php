<?php

class SwitchRouter
{
    public function route($uri, $method, $body, $path)
    {
        switch ($uri) {
            case '':
                //http://localhost/
                require __DIR__ . '/views/homepage.php';
                break;
            case 'home':
                require __DIR__ . '/views/homepage.php';
                break;
            case 'seedingcalendar':
                require __DIR__ . '/views/seedingcalendar.php';
                break;
            case 'tipstricks':
                require __DIR__ . '/views/tipstricks.php';
                break;
            case 'contact':
                require __DIR__ . '/views/contact.php';
                break;
            case 'welcome':
                require __DIR__ . '/views/welcome.php';
                break;
            case 'register':
                require __DIR__ . '/views/register.php';
                break;
            case 'login':
                require __DIR__ . '/views/login.php';
                break;
            case 'logout':
                require __DIR__ . '/views/login.php';
                break;
            case 'config':
                require __DIR__ . '/model/config.php';
                break;
            default:
                echo '404 not found';
                http_response_code(404);
        }
    }
}
