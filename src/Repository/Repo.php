<?php
namespace Repository;

abstract class Repo
{
    public function getContentType()
    {
        $class = get_called_class();
        $interfaces = class_implements(new $class());
        $contentType = array();
        foreach ($interfaces as $inter) {
            if (strpos($inter, 'ContentType') === true) {
                continue;
            }
            $type = substr($inter, strrpos($inter, '\\') + 1);
            if ($type === 'Video') {
                continue;
            }
            $contentType[] = $type;
        };
        return $contentType;
    }
}
