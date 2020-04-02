<?php

namespace selby\SitemapMaker;

abstract class SitemapMaker
{
    public static function newMap($type)
    {
        $class = __NAMESPACE__.'\Sitemap'.ucfirst(strtolower($type)).'Maker';
        return new $class;
    }

    abstract function createMap($data);
}
