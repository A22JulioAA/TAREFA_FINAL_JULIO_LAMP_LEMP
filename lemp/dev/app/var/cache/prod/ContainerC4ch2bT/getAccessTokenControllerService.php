<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC0FRcEHIc62FGu'."\n".'Ovl/KdcYvXUepk7DulenEMrmrHHk1uHoC7Bks95aIOiMZBa2GrwreUyqzu0Zq8yQ'."\n".'gj1s757M9vjL2DYj6y5ASeMRxZOiZYfKIOlNnYpP6r/OuK+uikHWWLSyufVTSH1k'."\n".'SUYglr3Y3Cb+VctIWtVXj3DXoAb1/y2GMzvrORN9mhvpT7ia6SuaOcVO74mg9vT8'."\n".'Z/470q7tOWkSCFegx42U6Nh1VFNEf/J88Kd2O+slQSLRn0/Dfm/e1qYK8SmppZ+7'."\n".'I+pDgsgGOcJ2CKOowNG6ci0nrKttBsh6CeuNmE+gkuiJnuU90omVqeyU432DfhXh'."\n".'7fj0ITZdAgMBAAECggEADF3QZU9iN/fH8CuLm6BvbXsBMnggO4+t2kKsdFfOQHVD'."\n".'MTCwTdIOSGkvHwj2iE3gsymSyr4ICTXDh/7xoev4n0Gshy8TVLcfR3nrdnp3b3UC'."\n".'dK565wIVD/TidBs5sUY8TDBuREHB55S4S60+fBlt8xj3MosIuTDHqsomaSBLqhPc'."\n".'odnH9Oh3LFDWI4ALuJBaq7hUwBmHAW7wa5wVrOWcjgdJBg9uF67soRje4nyEmhLb'."\n".'Kt4kSu+IgIM+b6s5GhVy1WFh5MyeRtjlo2kgZ3VvRuSnuFgcJT1AQAIWhfq0NTI4'."\n".'bulwkfPoYo2URwN9jHv/KIWywrSEFsVQkW3NPUCwUQKBgQD6RNf9AB9oEqhiaXeF'."\n".'pxFMt6yWU7CM1otYDkBK91jSUCR341H/8IYtPYJyE2wiNe5XXF7JMkZMSTl0TzFj'."\n".'OvWBg+Kr5hcORcMsYxH7lBU9UtESO7/Z+vwR0bui8hIScoI7+jBfq+nTX6Dzj2Rk'."\n".'TZ+zlN10tZ5EzFdwg06h4/9TiQKBgQC4NMpR6Ah1P+IywP42Yz5UzF4ASOdEv9fl'."\n".'tXFgGzD/eYLHhleuZkdUywOJ/8L8Q8GhLCgAKb8aJlyNqi5mMA0aOLKL7HPFW3TA'."\n".'24K2bG3tM+kYJvQ0Onk1z9YNEFx/5ihrjo+oL8+g8fc6bQCX+iaDRC8r/w1RVEtm'."\n".'umGkMVPTNQKBgQC+h0y7oq1GSPYCPfKtQHxOIIL2yu3curTIq8jMibQIINUypE/X'."\n".'/l/X7zzw5dJr1Q0HWx4aI/kauKBR6LxbpBYlrKcTYQ7qYbftgdq94YWt8u+R5wTu'."\n".'yUG/uyETMyEJBD4btSPAohtYPTRGWEMAjYvoZouV/3JnQ/3JfV2OqAnIqQKBgQCG'."\n".'yzKFzyppSi8m/qzHdcYF3WqoALEjUNMWp7hoIF2xhORbRwZgez2VYd2cHQk8+gP2'."\n".'Ac7fl6zc4Nd3XuIHKwBbgMO+um9ZKvx7p+W1whCKtCLM5qxqj6Nk6kpzUtatTOml'."\n".'EzQyWZIw7v7/xQXbMFUAV2PBaSkAq5Nlf9u1f9ccRQKBgCkF4VvHXU9qIv9lvjsL'."\n".'Z4C41kdZW8edWb0WZ0clXOCSGt83OzBAWpP9b5RvGpspKIlDk2D0GjNplNb2jaFJ'."\n".'AOMPFRiii69tNiHswnUxj1UR4CEdKKr70wgLKeSveluKuWXfBZoL7dLDGYD511tV'."\n".'yazahGs5lQtQboDaO9L58lxU'."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000719d25a1d84a344ea1fb7eaf9adb36e4e7dbd84792b508e543d6244eb0b551c478753438fb397185a77281936194050524464012de67a9272b96a9802bb7368d');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);