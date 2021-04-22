<?php
/**
 * Copyright © AJ. All rights reserved.
 */
namespace AJ\PluginExample\Model;

class AfterCartSecond
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
    public function afterAddProduct(\Magento\Checkout\Model\Cart $cart, $result)
    {
        $this->logger->info("After Add Product: Sort Order 20:");
        $this->logger->debug("After Add Product: Sort Order 20:");

        return $result;
    }
}
