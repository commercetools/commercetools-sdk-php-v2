<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ProductType\ProductTypePagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyProductTypesGet extends ApiRequest
{
    const RESULT_TYPE = ProductTypePagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/product-types');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ProductTypePagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ProductTypePagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyProductTypesGet
     */
    public function withExpand($expand): ByProjectKeyProductTypesGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyProductTypesGet
     */
    public function withWhere($where): ByProjectKeyProductTypesGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyProductTypesGet
     */
    public function withSort($sort): ByProjectKeyProductTypesGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyProductTypesGet
     */
    public function withLimit($limit): ByProjectKeyProductTypesGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyProductTypesGet
     */
    public function withOffset($offset): ByProjectKeyProductTypesGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyProductTypesGet
     */
    public function withWithTotal($withTotal): ByProjectKeyProductTypesGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
