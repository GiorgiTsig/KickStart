<?php declare(strict_types=1);

namespace DevAll\KickStart\Api\Data;

interface SignUpInterface
{
    public const ID = 'id';
    public const NAME = 'name';
    public const PASSWORD = 'password';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID
     *
     * @param int $id
     * @return self
     */
    public function setId(int $id);

    /**
     * Get Name
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Set Name
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;

    /**
     * Get Password
     *
     * @return string|null
     */
    public function getPassword(): ?string;

    /**
     * Set Password
     *
     * @param string $password
     * @return self
     */
    public function setPassword(string $password): self;
}
