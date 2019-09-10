<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/

namespace Commercetools\Client;

interface AuthConfig
{
    const OPT_BASE_URI = 'base_uri';
    const OPT_AUTH_URI = 'auth_uri';
    const OPT_CLIENT_OPTIONS = 'options';

    public function getGrantType(): string;

    public function getAuthUri(): string;

    public function setAuthUri(string $authUri): AuthConfig;

    public function getClientOptions(): array;

    public function setClientOptions(array $options): AuthConfig;

    public function getOptions(): array;
    
    public function getCacheKey(): string;
}