<?php

namespace Sengera\RefreshCacheWithCron\Model;

use Magento\Framework\App\Cache\Manager as CacheManager;
use Magento\Framework\Model\Context;

class Cron {

    private $_cacheManager;

    public function __construct(
        Context $context,
        CacheManager $cacheManager
    )
    {
        $this->_cacheManager = $cacheManager;
    }

    public function cronFunction()
    {
        $availableCacheTypes = $this->_cacheManager->getAvailableTypes();
        $this->_cacheManager->clean($availableCacheTypes);
    }
}