<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ProductDiscount\ProductDiscountPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyProductDiscountsGet extends ApiRequest
{
    const RESULT_TYPE = ProductDiscountPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/product-discounts', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ProductDiscountPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ProductDiscountPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyProductDiscountsGet
     */
    public function withExpand($expand): ByProjectKeyProductDiscountsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyProductDiscountsGet
     */
    public function withWhere($where): ByProjectKeyProductDiscountsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyProductDiscountsGet
     */
    public function withSort($sort): ByProjectKeyProductDiscountsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyProductDiscountsGet
     */
    public function withLimit($limit): ByProjectKeyProductDiscountsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyProductDiscountsGet
     */
    public function withOffset($offset): ByProjectKeyProductDiscountsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyProductDiscountsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyProductDiscountsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
