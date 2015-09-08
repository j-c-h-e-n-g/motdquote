# motdquote

[![Build Status](https://travis-ci.org/j-c-h-e-n-g/motdquote.png)](https://travis-ci.org/j-c-h-e-n-g/motdquote)

Just a sandbox app to see how TravisCI works. Currently tests against different versions of PHP, with a dummy test script.



# misc

Stolen from https://systembash.com/adding-random-quotes-to-the-bash-login-screen/ and in case that content ever goes away: 

- `getquote.php` depends on `rss_php.php`
- `rss_php.php` is the open source version - there's a commericial v3 version

... probably better to cron out scripts that scrape and cache quotes locally to a text file. Or like what was mention in the comments do something like this instead:

- `yum install fortune`
- `brew install fortune`
- `apt-get install fortune`
