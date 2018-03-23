<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Inventory\InventoryPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyInventoryGet extends ApiRequest
{
    const RESULT_TYPE = InventoryPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/inventory', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return InventoryPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  InventoryPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyInventoryGet
     */
    public function withExpand($expand): ByProjectKeyInventoryGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyInventoryGet
     */
    public function withWhere($where): ByProjectKeyInventoryGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyInventoryGet
     */
    public function withSort($sort): ByProjectKeyInventoryGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyInventoryGet
     */
    public function withLimit($limit): ByProjectKeyInventoryGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyInventoryGet
     */
    public function withOffset($offset): ByProjectKeyInventoryGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyInventoryGet
     */
    public function withWithTotal($withTotal): ByProjectKeyInventoryGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
