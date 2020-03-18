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
class ResourceByProjectKeyTaxCategoriesByID extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/tax-categories/{ID}', $args, $client);
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyTaxCategoriesByIDGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesByIDGet($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?TaxCategoryUpdate $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?TaxCategoryUpdate $body = null, array $headers = []): ByProjectKeyTaxCategoriesByIDPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesByIDPost($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function delete($body = null, array $headers = []): ByProjectKeyTaxCategoriesByIDDelete
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesByIDDelete($args['projectKey'], $args['ID'], $body, $headers, $this->getClient());
    }
}
