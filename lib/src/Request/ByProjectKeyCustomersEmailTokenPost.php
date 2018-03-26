<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Customer\CustomerToken;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Customer\CustomerCreateEmailToken;


class ByProjectKeyCustomersEmailTokenPost extends ApiRequest
{
    const RESULT_TYPE = CustomerToken::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, CustomerCreateEmailToken $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/customers/email-token');
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return CustomerToken
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  CustomerToken
    {
        return parent::map($response, $mapper);
    }

}
