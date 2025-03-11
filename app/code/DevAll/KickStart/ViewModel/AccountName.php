<?php

namespace DevAll\KickStart\ViewModel;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use DevAll\KickStart\Api\SignUpRepositoryInterface;

class AccountName implements ArgumentInterface
{
    public function __construct(
      private SignUpRepositoryInterface $signUpRepository
    ) {
    }

    /**
     * @throws LocalizedException
     */
    public function getAccountName(int $id): string
    {
        $lastAccount = $this->signUpRepository->getById($id);
        return $lastAccount->getName();
    }
}
