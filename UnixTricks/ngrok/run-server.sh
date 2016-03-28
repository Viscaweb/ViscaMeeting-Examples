# First, run ngrok on a specific port: 1234
ngrok 1234

# ngrok will create an entry point redirecting to 127.0.0.1:1234
# now, we just need to start a server on this port
php -S 127.0.0.1:1234

# we can now open: http://[ngrok-server]/welcome.php