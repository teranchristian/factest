<?php
namespace Factory;

use Repository;

class Video
{
    const DEFAULT_REPO = 'solr'; 
    private $repo;
    public $repositories = [
        'mpx' => 'Repository\Mpx',
        'mysql' => 'Repository\MySql',
        'solr' => 'Repository\Solr',
    ];

    public function getRepository($repo = self::DEFAULT_REPO)
    {
        if (!isset($this->repositories[$repo])) {
            throw new \Exception("Error Processing Request");
        }
        return $this->repo = new $this->repositories[$repo]();
    }

}
