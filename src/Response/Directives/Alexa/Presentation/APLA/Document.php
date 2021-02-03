<?php

namespace Develpr\AlexaApp\Response\Directives\Alexa\Presentation\APLA;


class Document
{
    const TYPE = 'APLA';
    const VERSION = '0.8';

    protected $item;

    public function __construct($item)
    {
        $this->item = $item;
    }

    public function toArray()
    {
        return [
            'type' => self::TYPE,
            'version' => self::VERSION,
            'mainTemplate' => [
                'item' => $this->item
            ]
        ];
    }
}
