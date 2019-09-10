<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client;

use Commercetools\Client\Config as BaseConfig;

class Config implements BaseConfig
{
    const API_URI = 'https://api.sphere.io';

    /** @var string */
    private $apiUri;

    /** @var array */
    private $clientOptions;

    public function __construct(array $config = [])
    {
        /** @var string $apiUri */
        $apiUri = isset($config[self::OPT_BASE_URI]) ? $config[self::OPT_BASE_URI] : static::API_URI;
        $this->apiUri = $apiUri;
        $this->clientOptions = isset($config[self::OPT_CLIENT_OPTIONS]) && is_array($config[self::OPT_CLIENT_OPTIONS]) ?
            $config[self::OPT_CLIENT_OPTIONS] : [];
    }

    public function getApiUri(): string
    {
        return $this->apiUri;
    }

    public function setApiUri(string $apiUri): BaseConfig
    {
        $this->apiUri = $apiUri;

        return $this;
    }

    public function getClientOptions(): array
    {
        return $this->clientOptions;
    }

    public function setClientOptions(array $options): BaseConfig
    {
        $this->clientOptions = $options;

        return $this;
    }

    public function getOptions(): array
    {
        return array_merge(
            [self::OPT_BASE_URI => $this->getApiUri()],
            $this->clientOptions
        );
    }
}
