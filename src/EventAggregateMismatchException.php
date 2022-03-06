<?php declare(strict_types=1);

namespace Tcieslar\EventSourcing;

use Exception;
use Throwable;

class EventAggregateMismatchException extends Exception
{
    public readonly Event $event;

    public function __construct(Throwable $throwable, Event $event)
    {
        parent::__construct('Event is no supported, or aggregate type mismatch.', 0, $throwable);
        $this->event = $event;
    }
}