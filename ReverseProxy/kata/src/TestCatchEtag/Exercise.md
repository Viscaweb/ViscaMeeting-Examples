# Implement your own reverse proxy

## Preamble
* Your reverse proxy must listen on the port: `80`
* Your web server must listen on the port: `8080`
* If you can't expose `80` and `8080`, feel free to use any other combinations (`89` and `8989` for example?)

`NOTE: ` You can easily switch from `PHP` to another language, you just need to have a running web server listening on those ports.

## Workflow
* The user tries to reach the page: `EntryPoint.php` through the reverse proxy (`8989`) 
* This file is sending headers describing it can be saved in cache until the etag value changes
* The user will reach the reverse proxy (in our case, emulated by `ReverseProxy.php`)
* The user must see the response content **and** headers provided by `EntryPoint.php`.

## Exercise
* Make `ReverseProxy.php` able to return the content requested by the user.
* Try parsing the headers provided by this request, and catch it.
* You must return an header called `X-Cache` with two possible values: *MISS* and *HIT*.
* Running the PHPUnit tests on `Test.php`, ensure your reverse proxy behave properly :clap:

**If you're doing this exercise with PHP, you can run the server with the built-in PHP server:**

* Create the reverse proxy server: `php -S 127.0.0.1:8989 TestCatchExpirationDate/ReverseProxy.php` (this last arguments redirects **all requests** to ReverseProxy.php)
* Create the web server: `php -S 127.0.0.1:89`