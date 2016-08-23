# Implement your own reverse proxy

## Workflow
* The user tries to reach the page: `TestCatchExpirationDate/EntryPoint.php` through the domain `kata.dev`
* `kata.dev` IS your reverse proxy and redirect *all* requests to `TestCatchExpirationDate/ReverseProxy.php`
* `ReverseProxy.php` is your reverse proxy.

`NOTE: ` You can easily switch from `PHP` to another language, you just need to have a running web server listening on `kata.dev`.

## Exercise
* Make `ReverseProxy.php` able to return the content requested by the user.
* Try parsing the headers provided by this request, and catch it.
* You must return an header called `X-Cache` with two possible values: *MISS* and *HIT*.
* Running the PHPUnit tests on `Test.php`, ensure your reverse proxy behave properly :clap: