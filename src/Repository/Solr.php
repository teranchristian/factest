<?php
namespace Repository;

use ContentType;

class Solr extends Repo
implements ContentType\Clip,
           ContentType\Episode,
           ContentType\Movie,
           ContentType\Trailer
{
    public function getVideoId(){ return;}
    public function getVideoLink(){ return;}
    public function getVideo($id){ return;}
    public function getVideos(array $ids){ return;}
    public function getVideoCategory($id){ return;}
}
