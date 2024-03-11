<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler\GetEditableCombinationsListHandler' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\QueryHandler\\GetEditableCombinationsListHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\QueryHandler\GetEditableCombinationsListHandler(($this->services['PrestaShop\\PrestaShop\\Core\\Grid\\Query\\ProductCombinationQueryBuilder'] ?? $this->load('getProductCombinationQueryBuilderService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Attribute\\Repository\\AttributeRepository'] ?? $this->load('getAttributeRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\Repository\\ProductImageRepository'] ?? $this->load('getProductImageRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Image\\ProductImagePathFactory'] ?? $this->load('getProductImagePathFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Product\\Combination\\NameBuilder\\CombinationNameBuilderInterface'] ?? $this->load('getCombinationNameBuilderInterfaceService.php')));
