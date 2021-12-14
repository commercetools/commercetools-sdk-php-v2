<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\OrderImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyOrdersImportContainersByImportContainerKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/orders/import-containers/{importContainerKey}', $args, $client);
    }

    /**
     * @psalm-param ?OrderImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderImportRequest $body = null, array $headers = []): ByProjectKeyOrdersImportContainersByImportContainerKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersImportContainersByImportContainerKeyPost($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
}
