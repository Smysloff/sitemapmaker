<?php

namespace selby\IOHandler;

class InputHandler
{
    private $getArray;
    private $postArray;

    public function __construct()
    {
        $this->getArray = $_GET;
        $this->postArray = $_POST;
    }

    public function issetGet($property): bool
    {
        return $this->isset($property, $this->getArray);
    }

    public function issetPost($property): bool
    {
        return $this->isset($property, $this->postArray);
    }

    private function isset($property, array $array): bool
    {
        if (is_string($property)) {
            return !empty($array[$property]);
        }

        if (is_array($property)) {
            $result = true;
            foreach ($property as $elem) {
                if (empty($array[$elem])) {
                    $result = false;
                    break;
                }
            }
            return $result;
        }
    }

    public function get($property)
    {
        return $this->getArray[$property];
    }

    public function post($property)
    {
        return $this->postArray[$property];
    }
}
