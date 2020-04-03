<?php

namespace selby\SitemapMaker;

use PHPHtmlParser\Dom;

class SitemapHtmlMaker extends SitemapMaker
{
    public function createMap($data): ?string
    {
        $result = '';
        $dom = new Dom;

        if (is_string($data)) { // else $data must be array
            $data = explode(PHP_EOL, $data);
        }

        foreach($data as $row) {

            $parts = explode(';', trim($row), 2);
            $url   = $parts[0];
            $text  = $parts[1];

            try {
                if (empty($text)) {
                    $dom->load($url);
                    $text = strip_tags($dom->find('h1')[0]->innerHtml);
                }

                if (empty($text)) {
                    $text = strip_tags($dom->find('title')[0]->innerHtml);
                }

                $result .= "<li><a href=\"$url\">$text</a></li>".PHP_EOL;

            } catch (\Exception $e) {
                $result .= 'ERROR: URL IS WRONG'.PHP_EOL;
            }
        }

        return trim($result);
    }
}
