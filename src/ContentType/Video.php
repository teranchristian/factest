<?php
namespace ContentType;

interface Video
{
    function getVideoId();
    function getVideoLink();
    function getVideo($id);
    function getVideos(array $ids);
    function getVideoCategory($id);
}
