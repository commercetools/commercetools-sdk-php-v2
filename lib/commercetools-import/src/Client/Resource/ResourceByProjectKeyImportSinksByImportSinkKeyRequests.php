<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importsinks\ImportRequest;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyImportSinksByImportSinkKeyRequests extends ApiResource
{
    /**
     * @psalm-param ?ImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?ImportRequest $body = null, array $headers = []): ByProjectKeyImportSinksByImportSinkKeyRequestsPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyImportSinksByImportSinkKeyRequestsPost($args['projectKey'], $args['importSinkKey'], $body, $headers, $this->getClient());
    }
}
