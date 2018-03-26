<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Payment\PaymentPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyPaymentsGet extends ApiRequest
{
    const RESULT_TYPE = PaymentPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/payments');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return PaymentPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  PaymentPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyPaymentsGet
     */
    public function withExpand($expand): ByProjectKeyPaymentsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyPaymentsGet
     */
    public function withWhere($where): ByProjectKeyPaymentsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyPaymentsGet
     */
    public function withSort($sort): ByProjectKeyPaymentsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyPaymentsGet
     */
    public function withLimit($limit): ByProjectKeyPaymentsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyPaymentsGet
     */
    public function withOffset($offset): ByProjectKeyPaymentsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyPaymentsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyPaymentsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
