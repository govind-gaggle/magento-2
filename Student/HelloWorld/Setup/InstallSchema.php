<?php
namespace Student\HelloWorld\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

	public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
	{
		
		$installer = $setup;
		$installer->startSetup();
		if (!$installer->tableExists('student')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('student')
			)
				->addColumn(
					'id',
					\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
					null,
					[
						'identity' => true,
						'nullable' => false,
						'primary'  => true,
						'unsigned' => true
					],
					'ID'
				)
				->addColumn(
					'name',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable' => false],
					'Post Name'
				)
				->addColumn(
					'class',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable' => false],
					'Post class'
				)
				->addColumn(
					'address',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					'64k',
					['nullable' => false],
					'Post address'
				)
				->setComment('Post Table');
			$installer->getConnection()->createTable($table);
			$installer->endSetup();
		}
	}
}

