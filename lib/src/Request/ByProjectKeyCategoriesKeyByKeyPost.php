<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Category\Category;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Category\CategoryUpdate;


class ByProjectKeyCategoriesKeyByKeyPost extends ApiRequest
{
    const RESULT_TYPE = Category::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, CategoryUpdate $body, array $headers = [])
    {
        $uri = sprintf('/%s/categories/key=%s', $projectKey, $key);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Category
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Category
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCategoriesKeyByKeyPost
     */
    public function withExpand($expand): ByProjectKeyCategoriesKeyByKeyPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
