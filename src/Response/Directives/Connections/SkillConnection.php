<?php

namespace Develpr\AlexaApp\Response\Directives\Connections;

use Develpr\AlexaApp\Response\Directives\Directive;
use Illuminate\Support\Str;

class SkillConnection extends Directive
{
    const TYPE = 'Connections.StartConnection';

    private $uri;
    private $input;
    private $token;

    public function __construct($uri, $input, $token = null)
    {
        $this->uri = $uri;
        $this->input = $input;
        $this->token = $token ?? Str::random();
    }

    public function getType()
    {
        return $this::TYPE;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getInput()
    {
        return $this->input;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function toArray()
    {
        return [
            'type' => $this->getType(),
            'uri' => $this->getUri(),
            'input' => $this->getInput(),
            'token' => $this->getToken(),
        ];
    }
}