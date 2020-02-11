<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Client\ApiResource;
use Psr\Http\Message\UploadedFileInterface;
use Commercetools\Api\Models\TaxCategory\TaxCategoryDraft;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 * @psalm-immutable
 */
class ResourceByProjectKeyTaxCategories extends ApiResource
{
    public function withKey(string $key = null): ResourceByProjectKeyTaxCategoriesKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyTaxCategoriesKeyByKey($this->getUri() . '/key={key}', $args, $this->getClient());
    }
    public function withId(string $ID = null): ResourceByProjectKeyTaxCategoriesByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyTaxCategoriesByID($this->getUri() . '/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyTaxCategoriesGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesGet((string) $args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?TaxCategoryDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?TaxCategoryDraft $body = null, array $headers = []): ByProjectKeyTaxCategoriesPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyTaxCategoriesPost((string) $args['projectKey'], $body, $headers, $this->getClient());
    }

}
