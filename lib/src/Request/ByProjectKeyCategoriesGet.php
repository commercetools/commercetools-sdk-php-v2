<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Category\CategoryPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCategoriesGet extends ApiRequest
{
    const RESULT_TYPE = CategoryPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/categories');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CategoryPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CategoryPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCategoriesGet
     */
    public function withExpand($expand): ByProjectKeyCategoriesGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyCategoriesGet
     */
    public function withWhere($where): ByProjectKeyCategoriesGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyCategoriesGet
     */
    public function withSort($sort): ByProjectKeyCategoriesGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyCategoriesGet
     */
    public function withLimit($limit): ByProjectKeyCategoriesGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyCategoriesGet
     */
    public function withOffset($offset): ByProjectKeyCategoriesGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyCategoriesGet
     */
    public function withWithTotal($withTotal): ByProjectKeyCategoriesGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
