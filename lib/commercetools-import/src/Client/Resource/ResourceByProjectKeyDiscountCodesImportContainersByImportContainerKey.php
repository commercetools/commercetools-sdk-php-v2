<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Client\ApiResource;
use Commercetools\Import\Models\Importrequests\DiscountCodeImportRequest;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyDiscountCodesImportContainersByImportContainerKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/discount-codes/import-containers/{importContainerKey}', $args, $client);
    }

    /**
     * @psalm-param ?DiscountCodeImportRequest $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?DiscountCodeImportRequest $body = null, array $headers = []): ByProjectKeyDiscountCodesImportContainersByImportContainerKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyDiscountCodesImportContainersByImportContainerKeyPost($args['projectKey'], $args['importContainerKey'], $body, $headers, $this->getClient());
    }
}
