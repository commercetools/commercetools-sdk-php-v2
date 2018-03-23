<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Product\ProductPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyProductsGet extends ApiRequest
{
    const RESULT_TYPE = ProductPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/products', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ProductPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ProductPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyProductsGet
     */
    public function withExpand($expand): ByProjectKeyProductsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyProductsGet
     */
    public function withWhere($where): ByProjectKeyProductsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyProductsGet
     */
    public function withSort($sort): ByProjectKeyProductsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyProductsGet
     */
    public function withLimit($limit): ByProjectKeyProductsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyProductsGet
     */
    public function withOffset($offset): ByProjectKeyProductsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyProductsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyProductsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
