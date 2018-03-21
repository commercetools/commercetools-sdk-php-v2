<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Customer\Customer;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyCustomersByIDDelete extends ApiRequest
{
    const RESULT_TYPE = Customer::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/customers/%s', $projectKey, $ID);
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Customer
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Customer
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $version
     * @return ByProjectKeyCustomersByIDDelete
     */
    public function withVersion($version): ByProjectKeyCustomersByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyCustomersByIDDelete
     */
    public function withExpand($expand): ByProjectKeyCustomersByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
