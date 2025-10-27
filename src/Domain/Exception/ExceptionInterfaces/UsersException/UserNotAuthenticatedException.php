<?php

namespace App\Domain\Exception\ExceptionInterfaces\UsersException;


use App\Application\Dto\ExcepDto\Action\ActionResult;
use App\Domain\Exception\BaseException\BusinessThrowableInterface;

class UserNotAuthenticatedException extends \RuntimeException implements BusinessThrowableInterface
{
    public function __construct(string $message = 'User is not authenticated.', int $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function getStatusCode(): int
    {
        return $this->code;
    }

    public function toActionResult(): ActionResult
    {
        return new ActionResult(
            status: $this->getStatusCode(),
            json: [
                'code' => $this->code,
                'message' => $this->message,
                'success' => false,
            ]
        );
    }
}
