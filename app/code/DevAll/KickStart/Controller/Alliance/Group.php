<?php
/**
 * @author Developers-Alliance team
 * @copyright Copyright (c) 2024 Developers-alliance (https://www.developers-alliance.com)
 * @license MIT
 */

declare(strict_types=1);

namespace DevAll\KickStart\Controller\Alliance;

use JetBrains\PhpStorm\NoReturn;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Group implements HttpGetActionInterface
{
    #[NoReturn] public function execute(): void
    {
        die('It is done');
    }
}
