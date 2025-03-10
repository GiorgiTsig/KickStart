<?php
/**
 * @author Developers-Alliance team
 * @copyright Copyright (c) 2024 Developers-alliance (https://www.developers-alliance.com)
 * @license MIT
 */

declare(strict_types=1);

namespace DevAll\KickStart\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class SignUp extends AbstractDb
{
    protected const MAIN_TABLE = 'registration';
    protected const ID_FIELD_NAME = 'id';

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
