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

class ByProjectKeyCustomersPasswordTokenByPasswordTokenGet extends ApiRequest
{
    const RESULT_TYPE = Customer::class;

    /**
     * @param $projectKey
     * @param $passwordToken
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $passwordToken, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{passwordToken}'], [$projectKey, $passwordToken], '/{projectKey}/customers/password-token={passwordToken}');
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $expand
     * @return ByProjectKeyCustomersPasswordTokenByPasswordTokenGet
     */
    public function withExpand($expand): ByProjectKeyCustomersPasswordTokenByPasswordTokenGet
    {
        return $this->withQueryParam('expand', $expand);
    }

}
