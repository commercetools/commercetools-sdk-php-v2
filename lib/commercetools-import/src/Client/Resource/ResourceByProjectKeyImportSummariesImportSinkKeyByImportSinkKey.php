<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Client\Resource;

use Shared\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyImportSummariesImportSinkKeyByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null) {
        parent::__construct('/{projectKey}/import-summaries/importSinkKey={importSinkKey}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyImportSummariesImportSinkKeyByImportSinkKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSummariesImportSinkKeyByImportSinkKeyGet($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }

}
