<?php
/**
 * Copyright © AJ. All rights reserved.
 */
namespace AJ\PluginExample\Model;

class AfterProductFirst
{
    protected $logger;
    
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    /**
     * After Get product name
     *
     * @return string
     * @codeCoverageIgnoreStart
     */
    public function afterGetName(\Magento\Catalog\Model\Product $product, $result)
    {
        $this->logger->info("After Get Name: Sort Order 99:");
        $this->logger->debug("After Get Name: Sort Order 99:");

        return "First Plugin - ".$result;
    }
}
