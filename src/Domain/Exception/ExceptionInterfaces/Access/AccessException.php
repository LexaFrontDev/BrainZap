<?php

namespace App\Domain\Exception\ExceptionInterfaces\Access;


use App\Application\Dto\ExcepDto\Action\ActionResult;
use App\Domain\Exception\BaseException\BusinessThrowableInterface;

final class AccessException extends \RuntimeException implements BusinessThrowableInterface
{
    public function __construct(string $message = 'Access denied')
    {
        parent::__construct($message);
    }

    public function getStatusCode(): int
    {
        return 301;
    }

    public function toActionResult(): ActionResult
    {
        return new ActionResult(
            status: $this->getStatusCode(),
            redirectUrl: '/ru/login'
        );
    }
}
