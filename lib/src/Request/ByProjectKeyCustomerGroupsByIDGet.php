<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\CustomerGroup\CustomerGroup;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCustomerGroupsByIDGet extends ApiRequest
{
    const RESULT_TYPE = CustomerGroup::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/customer-groups/%s', $projectKey, $ID);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CustomerGroup
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CustomerGroup
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyCustomerGroupsByIDGet
     */
    public function withExpand($expand): ByProjectKeyCustomerGroupsByIDGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}
