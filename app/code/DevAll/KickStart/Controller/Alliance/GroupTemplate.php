<?php

declare(strict_types=1);

namespace DevAll\KickStart\Controller\Alliance;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class GroupTemplate implements HttpGetActionInterface
{
    public function __construct(
        private readonly PageFactory $pageFactory,
    ) {
    }

    /**
     * @return Page
     */
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
