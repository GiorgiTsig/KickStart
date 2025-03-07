<?php
/**
 * @author Developers-Alliance team
 * @copyright Copyright (c) 2024 Developers-alliance (https://www.developers-alliance.com)
 * @license MIT
 */

declare(strict_types=1);

namespace DevAll\KickStart\Controller\Alliance;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Psr\Log\LoggerInterface;
use Magento\Customer\Model\Session;


class Group implements HttpGetActionInterface
{
    private RequestInterface $request;
    private Session $session;
    private LoggerInterface $logger;

    /**
     * @param Session $session
     * @param RequestInterface $request
     * @param LoggerInterface $logger
     */
    public function __construct(
        Session $session,
        RequestInterface $request,
        LoggerInterface $logger
    ) {
        $this->session = $session;
        $this->request = $request;
        $this->logger = $logger;
    }

    public function execute()
    {
        $this->logger->info('Alliance Group Controller');
        echo '<pre>';
        var_dump($this->session->getData());
        var_dump($this->request->getParams());
        die();
    }
}
