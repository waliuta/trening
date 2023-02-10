<?php
namespace Perspective\RawProject\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class TestRaw implements ActionInterface
{
    protected $resultFactory;
/**
* Index constructor.
*
* @param RawFactory $resultFactory
*/
public function __construct(RawFactory $resultFactory)
{
$this->resultFactory = $resultFactory;
}
public function execute()
{
    $page = $this->resultFactory->create()
    ->setHeader('Content-Type', 'text/xml')
    ->setContents('<root><name>Perspective Studio</name><job>Magento Developer</job></root>');
return $page;
}
}
