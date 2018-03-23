<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\CustomObject\CustomObjectPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCustomObjectsGet extends ApiRequest
{
    const RESULT_TYPE = CustomObjectPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/custom-objects', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CustomObjectPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CustomObjectPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCustomObjectsGet
     */
    public function withExpand($expand): ByProjectKeyCustomObjectsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyCustomObjectsGet
     */
    public function withWhere($where): ByProjectKeyCustomObjectsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyCustomObjectsGet
     */
    public function withSort($sort): ByProjectKeyCustomObjectsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyCustomObjectsGet
     */
    public function withLimit($limit): ByProjectKeyCustomObjectsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyCustomObjectsGet
     */
    public function withOffset($offset): ByProjectKeyCustomObjectsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyCustomObjectsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyCustomObjectsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
