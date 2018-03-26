<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\DiscountCode\DiscountCodePagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyDiscountCodesGet extends ApiRequest
{
    const RESULT_TYPE = DiscountCodePagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/discount-codes');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return DiscountCodePagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  DiscountCodePagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyDiscountCodesGet
     */
    public function withExpand($expand): ByProjectKeyDiscountCodesGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyDiscountCodesGet
     */
    public function withWhere($where): ByProjectKeyDiscountCodesGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyDiscountCodesGet
     */
    public function withSort($sort): ByProjectKeyDiscountCodesGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyDiscountCodesGet
     */
    public function withLimit($limit): ByProjectKeyDiscountCodesGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyDiscountCodesGet
     */
    public function withOffset($offset): ByProjectKeyDiscountCodesGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyDiscountCodesGet
     */
    public function withWithTotal($withTotal): ByProjectKeyDiscountCodesGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
