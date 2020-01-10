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

    /** @psalm-var string */
    private $apiUri;

    /** @psalm-var array */
    private $options;

    public function __construct(array $clientOptions = [], string $baseUri = null)
    {
        /** @psalm-var string $apiUri */
        $apiUri = $baseUri ?? static::API_URI;
        $this->apiUri = $apiUri;
        $this->options = array_replace(
            [self::OPT_BASE_URI => $this->apiUri],
            $clientOptions
        );
    }

    public function getApiUri(): string
    {
        return $this->apiUri;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
