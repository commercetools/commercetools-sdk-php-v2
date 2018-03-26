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

class ByProjectKeyPaymentsByIDDelete extends ApiRequest
{
    const RESULT_TYPE = Payment::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/payments/{ID}');
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $version
     * @return ByProjectKeyPaymentsByIDDelete
     */
    public function withVersion($version): ByProjectKeyPaymentsByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyPaymentsByIDDelete
     */
    public function withExpand($expand): ByProjectKeyPaymentsByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
