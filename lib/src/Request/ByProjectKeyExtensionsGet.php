<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Extension\ExtensionPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyExtensionsGet extends ApiRequest
{
    const RESULT_TYPE = ExtensionPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/extensions');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ExtensionPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ExtensionPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyExtensionsGet
     */
    public function withExpand($expand): ByProjectKeyExtensionsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyExtensionsGet
     */
    public function withWhere($where): ByProjectKeyExtensionsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyExtensionsGet
     */
    public function withSort($sort): ByProjectKeyExtensionsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyExtensionsGet
     */
    public function withLimit($limit): ByProjectKeyExtensionsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyExtensionsGet
     */
    public function withOffset($offset): ByProjectKeyExtensionsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyExtensionsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyExtensionsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
