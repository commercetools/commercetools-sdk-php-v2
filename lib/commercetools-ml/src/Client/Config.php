<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Ml\Client;

use Commercetools\Client\Config as BaseConfig;

class Config implements BaseConfig
{
    public const API_URI = 'https://ml-{region}.europe-west1.gcp.commercetools.com';

    public const OPT_REGION = '{region}';

    /** @psalm-var string */
    private $apiUri;

    /** @psalm-var array */
    private $options;

    public function __construct(string $region = null, array $clientOptions = [], string $baseUri = null)
    {
        /** @psalm-var string $apiUri */
        $apiUri = $baseUri ?? static::API_URI;
        $apiUri = str_replace(
            [
                self::OPT_REGION
            ],
            [
                $region ?? ""
            ],
            $apiUri
        );
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
