<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Payment\Payment;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\Payment\PaymentDraft;


class ByProjectKeyPaymentsPost extends ApiRequest
{
    const RESULT_TYPE = Payment::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, PaymentDraft $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '/{projectKey}/payments');
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Payment
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Payment
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyPaymentsPost
     */
    public function withExpand($expand): ByProjectKeyPaymentsPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
