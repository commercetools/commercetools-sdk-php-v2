<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Type\TypePagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyTypesGet extends ApiRequest
{
    const RESULT_TYPE = TypePagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/types', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return TypePagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  TypePagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyTypesGet
     */
    public function withExpand($expand): ByProjectKeyTypesGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyTypesGet
     */
    public function withWhere($where): ByProjectKeyTypesGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyTypesGet
     */
    public function withSort($sort): ByProjectKeyTypesGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyTypesGet
     */
    public function withLimit($limit): ByProjectKeyTypesGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyTypesGet
     */
    public function withOffset($offset): ByProjectKeyTypesGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyTypesGet
     */
    public function withWithTotal($withTotal): ByProjectKeyTypesGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
