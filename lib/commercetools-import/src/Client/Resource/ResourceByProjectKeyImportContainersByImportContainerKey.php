<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importcontainers\ImportContainerUpdateDraft;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyImportContainersByImportContainerKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/import-containers/{importContainerKey}', $args, $client);
    }

    /**
     */
    public function importSummaries(): ResourceByProjectKeyImportContainersByImportContainerKeyImportSummaries
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImportContainersByImportContainerKeyImportSummaries($args, $this->getClient());
    }
    /**
     */
    public function importOperations(): ResourceByProjectKeyImportContainersByImportContainerKeyImportOperations
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyImportContainersByImportContainerKeyImportOperations($args, $this->getClient());
    }

    /**
     * @psalm-param ?ImportContainerUpdateDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function put(?ImportContainerUpdateDraft $body = null, array $headers = []): ByProjectKeyImportContainersByImportContainerKeyPut
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportContainersByImportContainerKeyPut($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyImportContainersByImportContainerKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportContainersByImportContainerKeyGet($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyImportContainersByImportContainerKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportContainersByImportContainerKeyDelete($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
}
