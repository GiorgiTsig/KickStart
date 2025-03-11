<?php

namespace DevAll\KickStart\Controller\Alliance;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class GroupFirst implements HttpGetActionInterface
{

    public function __construct(
        private readonly PageFactory $pageFactory,
    ) {
    }

    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
