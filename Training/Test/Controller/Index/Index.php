<?php 

namespace Training\Test\Controller\Index;

use Magento\Framework\App\RequestInterface;

class Index extends \Magento\Framework\App\Action\Action
{

private $resultRawFactory;

private $request;

    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
    ) {

        $this->resultRawFactory = $resultRawFactory;
        parent::__construct($context);
    }

	public function execute()
	{
	 	$resultRaw = $this->resultRawFactory->create();
 	 	$resultRaw->setContents('simple text');
	   
        return $resultRaw;
 	}

}