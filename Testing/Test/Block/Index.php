<?php


namespace Testing\Test\Block;

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
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManagerInterface, /*make object of storeManagerInterface using constructor*/
        array $data = []
        
    ) {
        parent::__construct($context, $data);
        $this->storeManagerInterface = $storeManagerInterface;
    }

    public function showData()
    {
        return '<div>
                    <h2>Welcome to magento 2.3</h2>

                </div>';
    }
    public function getMediaUrl(){

    // $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    // $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
   // return $this->storeManagerInterface->getStore()->getBaseUrl(); OR 
   return $this->storeManagerInterface->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);


       // return $mediapath = $this->_filesystem->getDirectoryRead(DirectoryList::MEDIA)->getAbsolutePath();

    }
}