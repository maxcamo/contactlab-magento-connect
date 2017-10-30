<?php

$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();

$tableName = $installer->getTable('newsletter/queue_link');
/* @var $connection Varien_Db_Adapter_Pdo_Mysql */

$connection->addColumn($tableName, 'total', array(
		'type' => Varien_Db_Ddl_Table::TYPE_DECIMAL,
		'scale'     => 4,
		'precision' => 12,
		'nullable' => false,
		'comment' => 'Total'
));

$installer->endSetup();
