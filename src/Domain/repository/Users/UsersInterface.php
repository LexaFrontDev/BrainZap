<?php

namespace App\Domain\repository\Users;

use App\Domain\Entity\Users\Users;

interface UsersInterface
{
    public function saveUsers(Users $users): bool;
    public function updateUsers(Users $users): bool;
    public function getUsersById(int $id): Users;
}


