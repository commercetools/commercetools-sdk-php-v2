<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importsinks\ImportSinkDraft;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @deprecated
 */
class ResourceByProjectKeyImportSinks extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/import-sinks', $args, $client);
    }

    /**
     */
    public function withImportSinkKeyValue(string $importSinkKey = null): ResourceByProjectKeyImportSinksByImportSinkKey
    {
        $args = $this->getArgs();
        if (!is_null($importSinkKey)) {
            $args['importSinkKey'] = $importSinkKey;
        }

        return new ResourceByProjectKeyImportSinksByImportSinkKey($args, $this->getClient());
    }

    /**
     * @psalm-param ?ImportSinkDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ImportSinkDraft $body = null, array $headers = []): ByProjectKeyImportSinksPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksPost($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyImportSinksGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksGet($args['projectKey'], $body, $headers, $this->getClient());
    }
}
