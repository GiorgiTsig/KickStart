<?php
/**
 * @author Developers-Alliance team
 * @copyright Copyright (c) 2024 Developers-alliance (https://www.developers-alliance.com)
 * @license MIT
 */

declare(strict_types=1);

namespace DevAll\KickStart\Model;

use DevAll\KickStart\Api\Data\SignUpInterface;
use DevAll\KickStart\Model\ResourceModel\SignUp as SignUpResourceModel;
use DevAll\KickStart\Api\SignUpRepositoryInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class SignUpRepository implements SignUpRepositoryInterface
{
    public function __construct(
        private SignUpResourceModel $signUpResourceModel,
        private SignUpFactory $signUpFactory
    ) {
    }

    public function getById(int $id): SignUpInterface
    {
        $sign = $this->signUpFactory->create();
        $this->signUpResourceModel->load($sign, $id);

        if (!$sign->getId()) {
            throw new NoSuchEntityException(__('User with "%1" ID doesn\'t exist.', $id));
        }

        return $sign;
    }

    public function save(SignUpInterface $signUp): SignUpInterface
    {
        try {
            $this->signUpResourceModel->save($signUp);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }

        return $signUp;
    }

    public function deleteById(int $id): bool
    {
        $sign = $this->getById($id);

        try {
            $this->signUpResourceModel->delete($sign);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }

        return true;
    }
}
