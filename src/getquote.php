<?php
require_once 'rss_php.php';    
$rss = new rss_php;
$rss->load('http://www.quotedb.com/quote/quote.php?action=random_quote_rss');
$rssitems = $rss->getItems();

if ($rssitems) {
    // print_r($rssitems);
    echo $rssitems[0]['description'].' :: '.$rssitems[0]['title']."\n";
}
?>
