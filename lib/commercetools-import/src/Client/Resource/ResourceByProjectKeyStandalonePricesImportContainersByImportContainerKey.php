<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\StandalonePriceImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyStandalonePricesImportContainersByImportContainerKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/standalone-prices/import-containers/{importContainerKey}', $args, $client);
    }

    /**
     * @psalm-param ?StandalonePriceImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?StandalonePriceImportRequest $body = null, array $headers = []): ByProjectKeyStandalonePricesImportContainersByImportContainerKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyStandalonePricesImportContainersByImportContainerKeyPost($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
}
