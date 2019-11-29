<?php
namespace Student\HelloWorld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	// protected $_idFieldName = 'id';
	// protected $_eventPrefix = 'student_helloworld_post_collection';
	// protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Student\HelloWorld\Model\Post', 'Student\HelloWorld\Model\ResourceModel\Post');
	}

}

