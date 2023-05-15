<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\TypeImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyTypesImportContainersByImportContainerKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/types/import-containers/{importContainerKey}', $args, $client);
    }

    /**
     * @psalm-param ?TypeImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?TypeImportRequest $body = null, array $headers = []): ByProjectKeyTypesImportContainersByImportContainerKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyTypesImportContainersByImportContainerKeyPost($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
}
