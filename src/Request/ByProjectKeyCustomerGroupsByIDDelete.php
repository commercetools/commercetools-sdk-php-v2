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

class ByProjectKeyCustomerGroupsByIDDelete extends ApiRequest
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
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $version
     * @return ByProjectKeyCustomerGroupsByIDDelete
     */
    public function withVersion($version): ByProjectKeyCustomerGroupsByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyCustomerGroupsByIDDelete
     */
    public function withExpand($expand): ByProjectKeyCustomerGroupsByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
