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
    private $onCompletion;

    public function __construct($uri, $input, $onCompletion = 'RESUME_SESSION', $token = null)
    {
        $this->uri = $uri;
        $this->input = $input;
        $this->onCompletion = $onCompletion;
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

    public function getOnCompletion()
    {
        return $this->onCompletion;
    }

    public function toArray()
    {
        return [
            'type' => $this->getType(),
            'uri' => $this->getUri(),
            'input' => $this->getInput(),
            'onCompletion' => $this->getOnCompletion(),
            'token' => $this->getToken(),
        ];
    }
}