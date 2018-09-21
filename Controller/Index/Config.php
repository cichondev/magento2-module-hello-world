<?php

namespace Mageplaza\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Mageplaza\HelloWorld\Helper\Data as Helper;

class Config extends Action
{
    protected $_pageFactory;

    protected $helperData;

    public function __construct(Context $context, PageFactory $pageFactory, Helper $helperData)
    {
        $this->_pageFactory = $pageFactory;
        $this->helperData = $helperData;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        echo $this->helperData->getGeneralConfig('enable');
        echo $this->helperData->getGeneralConfig('display_text');
        exit();
    }
}