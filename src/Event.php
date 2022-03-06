<?php declare(strict_types=1);

namespace Tcieslar\EventSourcing;

use DateTimeImmutable;

interface Event
{
    public function getEventId(): Uuid;

    public function getOccurredAt(): DateTimeImmutable;
}