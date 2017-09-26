<?php

namespace makbari\DotEnvEditor\services;
/**
 * Class Config
 * @package makbari\DotEnvEditor\config
 */
class Config
{
    /**
     * @var \mhndev\config\Config
     */
    protected $conf;

    /**
     * Config constructor.
     * @param string $confDirectoryPath
     */
    public function __construct($confDirectoryPath)
    {

        $this->conf = new \mhndev\config\Config($confDirectoryPath);
    }


    /**
     * @param $item
     * @return mixed|null
     */
    public function get($item)
    {
        return $this->conf->get($item);
    }

}
