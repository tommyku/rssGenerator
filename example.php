<?php
include_once("rssGenerator.php");

$rss = new RssGenerator("Liftoff News","http://liftoff.msfc.nasa.gov/","Liftoff to Space Exploration.",strtotime("Tue, 10 Jun 2003 04:00:00 GMT"),strtotime("Tue, 10 Jun 2003 09:41:01 GMT"),array(
	"docs" => "http://blogs.law.harvard.edu/tech/rss",
	"generator" => "Weblog Editor 2.0",
	"managingEditor" => "editor@example.com",
	"webMaster" => "webmaster@example.com"
));
$rss->addItem(array(
	"title" => "Star City",
	"link" => "http://liftoff.msfc.nasa.gov/news/2003/news-starcity.asp",
	"description" => "How do Americans get ready to work with Russians aboard the International Space Station? They take a crash course in culture, language and protocol at Russia's &lt;a href=\"http://howe.iki.rssi.ru/GCTC/gctc_e.htm\"&gt;Star City&lt;/a&gt;.",
	"pubDate" => "Tue, 03 Jun 2003 09:39:21 GMT",
	"guid" => "http://liftoff.msfc.nasa.gov/2003/06/03.html#item573"
));

$rss->publish();