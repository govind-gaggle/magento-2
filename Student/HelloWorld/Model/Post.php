<?php
namespace Student\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel 
{
	protected function _construct()
	{
		$this->_init('Student\HelloWorld\Model\ResourceModel\Post');
	}
}
