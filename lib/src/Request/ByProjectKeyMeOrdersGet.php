<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Order\OrderPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyMeOrdersGet extends ApiRequest
{
    const RESULT_TYPE = OrderPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/me/orders');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return OrderPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  OrderPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyMeOrdersGet
     */
    public function withExpand($expand): ByProjectKeyMeOrdersGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyMeOrdersGet
     */
    public function withWhere($where): ByProjectKeyMeOrdersGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyMeOrdersGet
     */
    public function withSort($sort): ByProjectKeyMeOrdersGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyMeOrdersGet
     */
    public function withLimit($limit): ByProjectKeyMeOrdersGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyMeOrdersGet
     */
    public function withOffset($offset): ByProjectKeyMeOrdersGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyMeOrdersGet
     */
    public function withWithTotal($withTotal): ByProjectKeyMeOrdersGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
