<?php

namespace Develpr\AlexaApp\Response\Directives\Alexa\Presentation\APLA;

use Develpr\AlexaApp\Response\Directives\Directive;
use Illuminate\Support\Str;

class RenderDocument extends Directive
{
    const TYPE = 'Alexa.Presentation.APLA.RenderDocument';

    protected $document;

    public function __construct(Document $document)
    {
        $this->document = $document;

    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'type' => self::TYPE,
            'token' => Str::random(),
            'document' => $this->document->toArray()
        ];
    }

}
