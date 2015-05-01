# The HUMP stack

## The stack

HUMP - as coined by @TheMattBrunt and @tdc_hodgy - uses the following stack:

* H - [Hiawatha web server](http://www.slideshare.net/Brunty/hiawatha-the-best-webserver-youve-never-heard-of "Hiawatha - The best webserver you've (probably) never heard of")
* U - Unix (or if you prefer, Ubuntu)
* M - MySQL (or MariaDB)
* P - PHP


## The setup

For the initial ansible package, I've used [Phansible](http://phansible.com/) - because it is awesome!

It uses Ubuntu 14.04 with PHP 5.6 and MariaDB with Composer and XDebug

I've extended it to include the following:

* The Hiawatha Debian repo - [http://apt.sparkz.no/debian/](http://apt.sparkz.no/debian/)
* Mailcatcher
* Bower
* Gulp


## Configuration

* Mounts current dir to /srv
* IP: 192.168.20.30
* DB: root / Admin123  -//- web_user / User123





