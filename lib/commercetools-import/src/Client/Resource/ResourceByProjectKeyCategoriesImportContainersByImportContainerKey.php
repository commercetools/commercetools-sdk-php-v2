<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\CategoryImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyCategoriesImportContainersByImportContainerKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/categories/import-containers/{importContainerKey}', $args, $client);
    }

    /**
     * @psalm-param ?CategoryImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CategoryImportRequest $body = null, array $headers = []): ByProjectKeyCategoriesImportContainersByImportContainerKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCategoriesImportContainersByImportContainerKeyPost($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
}
