<?php declare(strict_types=1);

namespace Tcieslar\EventSourcing;

use Exception;
use Throwable;

class EventAggregateMismatchException extends Exception
{
    public readonly EventInterface $event;

    public function __construct(Throwable $throwable, EventInterface $event)
    {
        parent::__construct('Event is no supported, or aggregate type mismatch.', 0, $throwable);
        $this->event = $event;
    }
}