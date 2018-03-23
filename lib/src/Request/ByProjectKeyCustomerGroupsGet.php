<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\CustomerGroup\CustomerGroupPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCustomerGroupsGet extends ApiRequest
{
    const RESULT_TYPE = CustomerGroupPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/customer-groups', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CustomerGroupPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CustomerGroupPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCustomerGroupsGet
     */
    public function withExpand($expand): ByProjectKeyCustomerGroupsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyCustomerGroupsGet
     */
    public function withWhere($where): ByProjectKeyCustomerGroupsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyCustomerGroupsGet
     */
    public function withSort($sort): ByProjectKeyCustomerGroupsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyCustomerGroupsGet
     */
    public function withLimit($limit): ByProjectKeyCustomerGroupsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyCustomerGroupsGet
     */
    public function withOffset($offset): ByProjectKeyCustomerGroupsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyCustomerGroupsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyCustomerGroupsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
