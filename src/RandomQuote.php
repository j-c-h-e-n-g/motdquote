<?php

class RandomQuote {

    function __construct() 
    {
        require_once 'rss_php.php';    

        $rss = new rss_php;
        $rss->load('http://www.quotedb.com/quote/quote.php?action=random_quote_rss');
        $this->rssitems = $rss->getItems();

    }

    function getOne() 
    {
        if ($this->rssitems) {
            // print_r($rssitems);
            echo $this->rssitems[0]['description'].' :: '.$rssitems[0]['title']."\n";
        }
   }

}


?>
