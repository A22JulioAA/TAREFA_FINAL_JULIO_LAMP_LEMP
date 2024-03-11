<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\Shop\CommandHandler\SetProductShopsHandler' shared autowired service.

$a = ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepositoryService.php'));

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Shop\\CommandHandler\\SetProductShopsHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Shop\CommandHandler\SetProductShopsHandler($a, ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\ProductDeleter'] ?? $this->load('getProductDeleterService.php')), new \PrestaShop\PrestaShop\Adapter\Product\Update\ProductShopUpdater($a, ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Repository\\StockAvailableRepository'] ?? $this->load('getStockAvailableRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Shop\\Repository\\ShopRepository'] ?? $this->load('getShopRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] ?? $this->load('getProductImageRepositoryService.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Update\\ProductStockUpdater'] ?? $this->load('getProductStockUpdaterService.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $this->load('getCombinationRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Update\\CombinationStockUpdater'] ?? $this->load('getCombinationStockUpdaterService.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Update\\DefaultCombinationUpdater'] ?? $this->load('getDefaultCombinationUpdaterService.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductCategoryUpdater'] ?? $this->load('getProductCategoryUpdaterService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Category\\Repository\\CategoryRepository'] ?? $this->load('getCategoryRepositoryService.php'))));
