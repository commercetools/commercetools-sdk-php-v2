<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\CustomerImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCustomersImportContainersByImportContainerKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/customers/import-containers/{importContainerKey}', $args, $client);
    }

    /**
     * @psalm-param ?CustomerImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerImportRequest $body = null, array $headers = []): ByProjectKeyCustomersImportContainersByImportContainerKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersImportContainersByImportContainerKeyPost($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
}
