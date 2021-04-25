<?php
/**
 * Copyright © AJ. All rights reserved.
 */
namespace AJ\PluginExample\Model;

class AroundCartFirst
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
    public function aroundAddProduct(
        \Magento\Checkout\Model\Cart $cart,
        \Closure $proceed,
        $productInfo,
        $requestInfo = null
    ) {
        $this->logger->info("Around Add Product: Sort Order 200:");
        $this->logger->debug("Around Add Product: Sort Order 200:");
        
        $requestInfo['qty'] = 15;
        $result = $proceed($productInfo, $requestInfo);

        return $result;
    }
}
