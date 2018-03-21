<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Cart\CartPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyMeCartsGet extends ApiRequest
{
    const RESULT_TYPE = CartPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/me/carts', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CartPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CartPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyMeCartsGet
     */
    public function withExpand($expand): ByProjectKeyMeCartsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyMeCartsGet
     */
    public function withWhere($where): ByProjectKeyMeCartsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyMeCartsGet
     */
    public function withSort($sort): ByProjectKeyMeCartsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyMeCartsGet
     */
    public function withLimit($limit): ByProjectKeyMeCartsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyMeCartsGet
     */
    public function withOffset($offset): ByProjectKeyMeCartsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyMeCartsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyMeCartsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
