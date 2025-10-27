<?php

namespace App\Application\Dto\ExcepDto\Action;

final class ActionResult
{
    public function __construct(
        public readonly int $status,
        /** @var array<string, mixed>|null $json */
        public readonly ?array $json = null,
        public readonly ?string $redirectUrl = null,
    ) {
    }
}