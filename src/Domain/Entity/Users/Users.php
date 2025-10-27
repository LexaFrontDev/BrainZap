<?php

namespace App\Domain\Entity\Users;

final class Users
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
        public readonly array $role,
        public readonly string $premium,
        public readonly ?int $id = null,
    ){}


}