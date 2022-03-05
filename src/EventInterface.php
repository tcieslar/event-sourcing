<?php declare(strict_types=1);

namespace Tcieslar\EventSourcing;

use DateTimeImmutable;

interface EventInterface
{
    public function getEventId(): Uuid;

    public function getOccurredAt(): DateTimeImmutable;
}