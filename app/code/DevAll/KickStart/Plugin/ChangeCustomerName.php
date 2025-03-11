<?php
/**
 * @author Developers-Alliance team
 * @copyright Copyright (c) 2024 Developers-alliance (https://www.developers-alliance.com)
 * @license MIT
 */

declare(strict_types=1);

namespace DevAll\KickStart\Plugin;

use DevAll\KickStart\Api\Data\SignUpInterface;
use DevAll\KickStart\Model\SignUpRepository;

class ChangeCustomerName
{
    /**
     * @param SignUpRepository $subject
     * @param SignUpInterface $signUp
     * @return array
     */
    public function beforeSave(SignUpRepository $subject, SignUpInterface $signUp): array
    {
        $signUp->getName();
        if ($signUp->getName()) {
            $signUp->setName('Mr.' . $signUp->getName());
        }
        return [$signUp];
    }
}
