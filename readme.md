[![Magento 2](https://img.shields.io/badge/Magento2-yes-green.svg)](https://github.com/mSengera/Magento-2-CSV-to-301-Redirect-Extension)

# [Magento 2] Sengera/RefreshCacheWithCron
A extension to clear cache with the magento cronjob.
You can specify the execution times in app/code/Sengera/RefreshCacheWithCron/etc/crontab.xml

Installation
------------

1. Copy the whole content of this module in your Magento installation directory.
2. Run "bin/magento setup:upgrade"
3. Depending on your Workspace: Run setup:di:compile and redeploy static-content if needed
4. Clear cache (Console "bin/magento c:c" or via Backend)
7. Test extension and be happy.

Best regards and happy coding!