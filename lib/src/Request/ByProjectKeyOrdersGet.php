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

class ByProjectKeyOrdersGet extends ApiRequest
{
    const RESULT_TYPE = OrderPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/orders');
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
     * @return ByProjectKeyOrdersGet
     */
    public function withExpand($expand): ByProjectKeyOrdersGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyOrdersGet
     */
    public function withWhere($where): ByProjectKeyOrdersGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyOrdersGet
     */
    public function withSort($sort): ByProjectKeyOrdersGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyOrdersGet
     */
    public function withLimit($limit): ByProjectKeyOrdersGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyOrdersGet
     */
    public function withOffset($offset): ByProjectKeyOrdersGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyOrdersGet
     */
    public function withWithTotal($withTotal): ByProjectKeyOrdersGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
