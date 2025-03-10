<?php

namespace DevAll\KickStart\Controller\Alliance;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\Result\RedirectFactory;

class GroupRedirect implements HttpGetActionInterface
{
    public function __construct(
        private readonly RedirectFactory $redirectFactory,
    ) {}

    /**
     * @return Redirect
     */
    public function execute(): Redirect
    {
        $redirect = $this->redirectFactory->create();
        return $redirect->setPath('*/Alliance/Group');
    }
}
