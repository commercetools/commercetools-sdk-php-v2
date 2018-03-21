<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\CartDiscount\CartDiscountPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCartDiscountsGet extends ApiRequest
{
    const RESULT_TYPE = CartDiscountPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/cart-discounts', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CartDiscountPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CartDiscountPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCartDiscountsGet
     */
    public function withExpand($expand): ByProjectKeyCartDiscountsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyCartDiscountsGet
     */
    public function withWhere($where): ByProjectKeyCartDiscountsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyCartDiscountsGet
     */
    public function withSort($sort): ByProjectKeyCartDiscountsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyCartDiscountsGet
     */
    public function withLimit($limit): ByProjectKeyCartDiscountsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyCartDiscountsGet
     */
    public function withOffset($offset): ByProjectKeyCartDiscountsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyCartDiscountsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyCartDiscountsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
