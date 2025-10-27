<?php

namespace App\Domain\Exception\ExceptionInterfaces\Message;


use App\Application\Dto\ExcepDto\Action\ActionResult;
use App\Domain\Exception\BaseException\BusinessThrowableInterface;

class MessageException extends \RuntimeException implements BusinessThrowableInterface
{
    public function __construct(string $message = 'The messages', int $code = 400)
    {
        parent::__construct($message, $code);
    }

    public function getStatusCode(): int
    {
        return $this->getCode();
    }

    /**
     * @return array<string, string|string|int>
     */
    private function getPayload(): array
    {
        return [
            'error' => 'MessageException',
            'message' => $this->getMessage(),
            'code' => $this->getCode(),
        ];
    }

    public function toActionResult(): ActionResult
    {
        return new ActionResult(
            status: $this->getStatusCode(),
            json: $this->getPayload()
        );
    }
}
