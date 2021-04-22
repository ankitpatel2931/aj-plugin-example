<?php
/**
 * Copyright © AJ. All rights reserved.
 */
namespace AJ\PluginExample\Model;

class AroundCartSecond
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
    public function aroundAddProduct(\Magento\Checkout\Model\Cart $cart, \Closure $proceed, $productInfo,
            $requestInfo = null)
    {
        $this->logger->info("Around Add Product: Sort Order 300:");
        $this->logger->debug("Around Add Product: Sort Order 300:");
        
        $requestInfo['qty'] = 7;
        $result = $proceed($productInfo, $requestInfo);

        return $result;
    }
}
