<?php declare(strict_types=1);

namespace DevAll\KickStart\Api;

use DevAll\KickStart\Api\Data\SignUpInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

interface SignUpRepositoryInterface
{
    /**
     * @param int $id
     * @return SignUpInterface
     * @throws LocalizedException
     */
    public function getById(int $id): SignUpInterface;

    /**
     * @param SignUpInterface $signUp
     * @return SignUpInterface
     * @throws LocalizedException
     */
    public function save(SignUpInterface $signUp): SignUpInterface;

    /**
     * @param int $id
     * @return bool
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $id): bool;
}
