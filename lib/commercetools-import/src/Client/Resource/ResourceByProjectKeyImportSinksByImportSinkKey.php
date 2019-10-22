<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importsinks\ImportSinkDraft;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyImportSinksByImportSinkKey extends ApiResource
{
    /**
     * @psalm-param ?ImportSinkDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function put(?ImportSinkDraft $body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyPut
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyPut($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyGet($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function delete($body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyDelete($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
