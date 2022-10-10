<?php 
/**
 * Qrcode
 *
 * @author zahidshar95@gmail.com
 */
namespace Zaazsoft\Qrcode\Block;

class Order extends \Magento\Framework\View\Element\Template
{

    private $order;

    public function __construct(
            \Magento\Framework\View\Element\Template\Context $context
    ) 
    {
        parent::__construct($context);
    }

    public function getOrderId(){

        return $this->getRequest()->getParam('order_id');

    } 
}


?>