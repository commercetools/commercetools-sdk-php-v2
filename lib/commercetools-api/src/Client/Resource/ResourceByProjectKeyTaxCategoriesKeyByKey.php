<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\TaxCategory\TaxCategoryUpdate;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyTaxCategoriesKeyByKey extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/tax-categories/key={key}', $args, $client);
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyTaxCategoriesKeyByKeyGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesKeyByKeyGet($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?TaxCategoryUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?TaxCategoryUpdate $body = null, array $headers = []): ByProjectKeyTaxCategoriesKeyByKeyPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesKeyByKeyPost($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyTaxCategoriesKeyByKeyDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesKeyByKeyDelete($args['projectKey'], $args['key'], $body, $headers, $this->getClient());
    }
}
