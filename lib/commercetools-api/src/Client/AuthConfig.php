<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client;

use Commercetools\Client\AuthConfig as BaseAuthConfig;

abstract class AuthConfig implements BaseAuthConfig
{
    const AUTH_URI = 'https://auth.sphere.io/oauth/token';

    const GRANT_TYPE = '';

    /** @var string */
    private $authUri;

    /** @var array */
    private $clientOptions;

    public function __construct(array $config = [])
    {
        // @var string authUri
        $this->authUri = isset($config[self::OPT_AUTH_URI]) ? $config[self::OPT_AUTH_URI] : static::AUTH_URI;
        $this->clientOptions = isset($config[self::OPT_CLIENT_OPTIONS]) && is_array($config[self::OPT_CLIENT_OPTIONS]) ?
            $config[self::OPT_CLIENT_OPTIONS] : [];
    }

    public function getGrantType(): string
    {
        // @var string
        return static::GRANT_TYPE;
    }

    public function getAuthUri(): string
    {
        return $this->authUri;
    }

    public function setAuthUri(string $authUri): BaseAuthConfig
    {
        $this->authUri = $authUri;

        return $this;
    }

    public function getClientOptions(): array
    {
        return $this->clientOptions;
    }

    public function setClientOptions(array $options): BaseAuthConfig
    {
        $this->clientOptions = $options;

        return $this;
    }

    public function getOptions(): array
    {
        return array_merge(
            [self::OPT_BASE_URI => $this->authUri],
            $this->clientOptions
        );
    }

    abstract public function getCacheKey(): string;
}
