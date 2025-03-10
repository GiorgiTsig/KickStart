<?php

declare(strict_types=1);

namespace DevAll\KickStart\Model;

use DevAll\KickStart\Api\Data\SignUpInterface;
use Magento\Framework\Model\AbstractModel;

class SignUp extends AbstractModel implements SignUpInterface
{
    protected function _construct()
    {
        $this->_init(ResourceModel\SignUp::class);
    }

    /**
     * Get Name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get Password
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->getData(self::PASSWORD);
    }

    /**
     * Set Password
     *
     * @param string $password
     * @return self
     */
    public function setPassword(string $password): self
    {
        return $this->setData(self::PASSWORD, $password);
    }
}
