<?php

namespace Pallant\AlexaApp\Response\Directives\AudioPlayer;

use Pallant\AlexaApp\Response\Directives\Directive;

class AudioPlayer extends Directive
{
    const TYPE = 'AudioPlayer.Stop';


    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        $stopAsArray['type'] = self::TYPE;

        return $stopAsArray;
    }
}
