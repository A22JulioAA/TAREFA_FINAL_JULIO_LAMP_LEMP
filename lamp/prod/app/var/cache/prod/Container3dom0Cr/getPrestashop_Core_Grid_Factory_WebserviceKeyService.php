<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.webservice_key' shared service.

return $this->services['prestashop.core.grid.factory.webservice_key'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.core.grid.definition.factory.webservice_key'] ?? $this->load('getPrestashop_Core_Grid_Definition_Factory_WebserviceKeyService.php')), ($this->services['prestashop.core.grid.data_factory.webservice_key'] ?? $this->load('getPrestashop_Core_Grid_DataFactory_WebserviceKeyService.php')), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));
