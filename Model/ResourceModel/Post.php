<?php

namespace Mageplaza\HelloWorld\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Mageplaza\HelloWorld\Model\Post as Model;

class Post extends AbstractDb
{
    /**
     * Post constructor.
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            Model::ENTITY,
            Model::ID_FIELD_NAME
        );
    }
}
