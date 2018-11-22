<?php

namespace Training\Test\Controller\Product;

use Magento\Framework\App\Action\Context;

class View extends \Magento\Catalog\Controller\Product\View
{

    protected $viewHelper;
    protected $resultForwardFactory;
    protected $resultRedirectFactory;
    protected $pageFactory;
    protected $customerSession;

    public function __construct (
        Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Catalog\Helper\Product\View $viewHelper,
        \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory,
        \Magento\Framework\Controller\Result\RedirectFactory $resultRedirectFactory,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->customerSession = $customerSession;        
        $this->resultRedirectFactory = $resultRedirectFactory;

        parent::__construct($context, $viewHelper, $resultForwardFactory, $pageFactory);
    }

    public function execute()
    {
        if (!$this->customerSession->isLoggedIn()) {
            return $this->resultRedirectFactory->create()->setPath('customer/account/login');
        }
    }
}
