<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Ml\Models\MissingData\MissingPricesSearchRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyMissingDataPrices extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/missing-data/prices', $args, $client);
    }

    public function status(): ResourceByProjectKeyMissingDataPricesStatus
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyMissingDataPricesStatus($args, $this->getClient());
    }

    /**
     * @psalm-param ?MissingPricesSearchRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?MissingPricesSearchRequest$body = null, array $headers = []): ByProjectKeyMissingDataPricesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyMissingDataPricesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
