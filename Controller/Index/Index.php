<?php

namespace Mageplaza\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Mageplaza\HelloWorld\Model\PostFactory;

class Index extends Action
{
    protected $_pageFactory;

    protected $_postFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        PostFactory $postFactory
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
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
        $post = $this->_postFactory->create();

        $collection = $post->getCollection();
        foreach ($collection as $post) {
            echo "<pre>";
            print_r($post->getData());
            echo "</pre>";
        }

        //return $this->_pageFactory->create();
    }
}