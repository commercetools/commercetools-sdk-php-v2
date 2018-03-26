<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\State\StatePagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyStatesGet extends ApiRequest
{
    const RESULT_TYPE = StatePagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/states');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return StatePagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  StatePagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyStatesGet
     */
    public function withExpand($expand): ByProjectKeyStatesGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyStatesGet
     */
    public function withWhere($where): ByProjectKeyStatesGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyStatesGet
     */
    public function withSort($sort): ByProjectKeyStatesGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyStatesGet
     */
    public function withLimit($limit): ByProjectKeyStatesGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyStatesGet
     */
    public function withOffset($offset): ByProjectKeyStatesGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyStatesGet
     */
    public function withWithTotal($withTotal): ByProjectKeyStatesGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
