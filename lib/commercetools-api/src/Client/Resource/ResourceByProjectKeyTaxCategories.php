<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\TaxCategory\TaxCategoryDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyTaxCategories extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/tax-categories', $args, $client);
    }

    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyTaxCategoriesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyTaxCategoriesKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyTaxCategoriesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyTaxCategoriesByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyTaxCategoriesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?TaxCategoryDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?TaxCategoryDraft $body = null, array $headers = []): ByProjectKeyTaxCategoriesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
