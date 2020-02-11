<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderImportDraft;
use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyOrdersImport extends ApiResource
{
    /**
     * @psalm-param ?OrderImportDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderImportDraft $body = null, array $headers = []): ByProjectKeyOrdersImportPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersImportPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
}
