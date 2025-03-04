<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Order\OrderImportDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyOrdersImport extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/orders/import', $args, $client);
    }

    /**
     * @psalm-param ?OrderImportDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?OrderImportDraft $body = null, array $headers = []): ByProjectKeyOrdersImportPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyOrdersImportPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
