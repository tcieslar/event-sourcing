<?php declare(strict_types=1);

namespace Tcieslar\EventSourcing;

interface Aggregate
{
    public function getId(): Uuid;

    public function recordedEvents(): EventCollection;

    public function removeRecordedEvents(): void;

    /**
     * @throws EventAggregateMismatchException
     */
    public function reply(EventInterface $event): void;

    /**
     * @throws EventAggregateMismatchException
     */
    public static function loadFromEvents(EventCollection $events): static;
}