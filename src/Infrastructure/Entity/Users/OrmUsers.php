<?php

namespace App\Infrastructure\Entity\Users;


use App\Domain\Entity\Users\Users;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class OrmUsers implements UserInterface, PasswordAuthenticatedUserInterface
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(name: 'name', length: 255, unique: true, nullable: false)]
    private string $name;

    #[ORM\Column(name: 'email', length: 255, unique: true, nullable: false)]
    private string $email;


    #[ORM\Column(name: 'password', length: 255, nullable: false)]
    private string $password;

    #[ORM\Column(name: 'role', type: 'json', length: 255, nullable: false)]
    private array $role;


    #[ORM\Column(name: 'premium', type: 'boolean', nullable: false)]
    private bool $premium;

    public function fromDomain(Users $dU)
    {
        $this->name = $dU->name;
        $this->email = $dU->email;
        $this->password = $dU->password;
        $this->role = $dU->role;
        $this->premium = $dU->premium;
        return $this;
    }


    public function toDomain(): Users
    {
        return new Users(
            name: $this->name,
            email: $this->email,
            password: $this->password,
            role: $this->role,
            premium: $this->premium,
            id: $this->id,);
    }


    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getRoles(): array
    {
        return $this->role;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }
}