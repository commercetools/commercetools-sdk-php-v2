<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importcontainers\ImportContainerDraft;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyImportContainers extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/import-containers', $args, $client);
    }

    /**
     */
    public function withImportContainerKeyValue(?string $importContainerKey = null): ResourceByProjectKeyImportContainersByImportContainerKey
    {
        $args = $this->getArgs();
        if (!is_null($importContainerKey)) {
            $args['importContainerKey'] = $importContainerKey;
        }

        return new ResourceByProjectKeyImportContainersByImportContainerKey($args, $this->getClient());
    }

    /**
     * @psalm-param ?ImportContainerDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ImportContainerDraft $body = null, array $headers = []): ByProjectKeyImportContainersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportContainersPost($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyImportContainersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportContainersGet($args['projectKey'], $body, $headers, $this->getClient());
    }
}
