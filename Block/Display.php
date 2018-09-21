<?php

namespace Mageplaza\HelloWorld\Block;

use Mageplaza\HelloWorld\Model\PostFactory;
use Magento\Framework\View\Element\Template;

class Display extends Template
{
    protected $_postFactory;

    public function __construct(
        Template\Context $context,
        PostFactory $postFactory,
        array $data = []
    ) {
        $this->_postFactory = $postFactory;
        parent::__construct($context, $data);
    }

    public function sayHello()
    {
        return __('Hello World');
    }

    public function getPostCollection()
    {
        $post = $this->_postFactory->create();
        return $post->getCollection();
    }
}