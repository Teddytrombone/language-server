<?php

namespace Phpactor\LanguageServer\Core\Server\Transmitter;

use Phpactor\LanguageServer\Core\Rpc\Message;

class NullMessageTransmitter implements MessageTransmitter
{
    public function transmit(Message $response): void
    {
    }
}
