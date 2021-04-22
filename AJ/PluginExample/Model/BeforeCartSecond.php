<?php
/**
 * Copyright © AJ. All rights reserved.
 */
namespace AJ\PluginExample\Model;

class BeforeCartSecond
{
    protected $logger;
    
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    /**
     * Before Add product cart
     *
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function beforeAddProduct(\Magento\Checkout\Model\Cart $cart, $productInfo,
            $requestInfo = null)
    {
        $this->logger->info("Before Add Product: Sort Order 101:");
        $this->logger->debug("Before Add Product: Sort Order 101:");
        
        $requestInfo['qty'] = 5;
        return array($productInfo, $requestInfo);
    }
}
