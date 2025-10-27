<?php

namespace App\Domain\Exception\BaseException;


use App\Application\Dto\ExcepDto\Action\ActionResult;

interface BusinessThrowableInterface
{
    public function getStatusCode(): int;

    public function toActionResult(): ActionResult;
}