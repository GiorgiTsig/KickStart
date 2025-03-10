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
use Magento\Framework\App\RequestInterface;
use Psr\Log\LoggerInterface;

class Group implements HttpGetActionInterface
{
    public function __construct(
        private readonly LoggerInterface $logger,
        private readonly RequestInterface $request,
    ) {
    }

    #[NoReturn] public function execute(): void
    {
        $this->logger->info('Alliance Group Controller');
        echo '<pre>';
        var_dump($this->request->getParams());
        die();
    }
}
