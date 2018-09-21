<?php

namespace Mageplaza\HelloWorld\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * @var InstallSchema $installSchema
     */
    private $installSchema;

    public function __construct(InstallSchema $installSchema)
    {
        $this->installSchema = $installSchema;
    }

    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '0.1.1', '<')) {
            $this->installSchema->createTablePost($setup);
        }

        $setup->endSetup();
    }
}