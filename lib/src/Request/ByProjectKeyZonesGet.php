<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Zone\ZonePagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyZonesGet extends ApiRequest
{
    const RESULT_TYPE = ZonePagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/zones');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ZonePagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ZonePagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyZonesGet
     */
    public function withExpand($expand): ByProjectKeyZonesGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyZonesGet
     */
    public function withWhere($where): ByProjectKeyZonesGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyZonesGet
     */
    public function withSort($sort): ByProjectKeyZonesGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyZonesGet
     */
    public function withLimit($limit): ByProjectKeyZonesGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyZonesGet
     */
    public function withOffset($offset): ByProjectKeyZonesGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyZonesGet
     */
    public function withWithTotal($withTotal): ByProjectKeyZonesGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
