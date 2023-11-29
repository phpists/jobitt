<?php

namespace App\Services;

class LinkTransformService
{
    static public function transformPositionName(string $position): string
    {
        return str_replace('/', '~', str_replace(' ', '-', $position));
    }

    static public function redoTransform(string|null $transformedPosition): string|null
    {
        if ($transformedPosition === null) {
            return null;
        }
        return str_replace('~', '/', str_replace('-', ' ', $transformedPosition));
    }
}
