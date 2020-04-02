<?php

namespace selby\SitemapMaker;

class SitemapHtmlMaker extends SitemapMaker
{
    public function createMap($data): ?string
    {
        if (is_string($data)) {
            $data = explode(PHP_EOL, $data);
        }

        $result = '';

        foreach($data as $row) {

            $parts = explode(';', trim($row), 2);
            $url   = $parts[0];
            $text  = $parts[1];

            if (empty($text)) {
                $text = 'заголовок страницы';
            }

            $result .= "<li><a href=\"$url\">$text</a></li>".PHP_EOL;
        }

        return trim($result);
    }
}
