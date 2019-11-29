<?php


namespace Student\HelloWorld\Block;

use Magento\Framework\App\Filesystem\DirectoryList;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $_filesystem;
    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Student\HelloWorld\Model\Post $postModel,
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManagerInterface, /*make object of storeManagerInterface using constructor*/
        array $data = []
        
    ) {
        $this->postModel = $postModel;
        parent::__construct($context, $data);
        $this->storeManagerInterface = $storeManagerInterface;
    }

    public function showData()
    {
        // $collection = $this->postModel->load('1'); //get row from id 1
        // $collection = $this->postModel->getCollection(); //get all data 
        $collection = $this->postModel->getCollection()->addFieldToFilter('id', '2'); //get filtered data from id 2 row only
        // $collection = $this->postModel->getCollection()->addFieldToFilter('id', array('1','2','3'));//get multiple ids filtered data
        print_r($collection->getData());

    //     foreach ($collection as $product){
    //       echo  $product->getId().'</br>';
    //     // $product->setclass('assss');
    //     // $product->save();
    //     // print_r($product->getData());
    // }
}
    public function getMediaUrl(){

    // $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    // $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
   // return $this->storeManagerInterface->getStore()->getBaseUrl(); OR 
   return $this->storeManagerInterface->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);


       // return $mediapath = $this->_filesystem->getDirectoryRead(DirectoryList::MEDIA)->getAbsolutePath();

    }
}