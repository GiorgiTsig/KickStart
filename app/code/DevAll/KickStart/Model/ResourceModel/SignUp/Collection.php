<?php
/**
 * @author Developers-Alliance team
 * @copyright Copyright (c) 2024 Developers-alliance (https://www.developers-alliance.com)
 * @license MIT
 */

declare(strict_types=1);

namespace DevAll\KickStart\Model\ResourceModel\SignUp;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use DevAll\KickStart\Model\SignUp;
use DevAll\KickStart\Model\ResourceModel as SignUpResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(SignUp::class, SignUpResourceModel::class);
    }
}
