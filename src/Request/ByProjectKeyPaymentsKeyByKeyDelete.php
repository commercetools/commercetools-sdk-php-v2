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

class ByProjectKeyPaymentsKeyByKeyDelete extends ApiRequest
{
    const RESULT_TYPE = Payment::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/payments/key=%s', $projectKey, $key);
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
     * @return ByProjectKeyPaymentsKeyByKeyDelete
     */
    public function withVersion($version): ByProjectKeyPaymentsKeyByKeyDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeyPaymentsKeyByKeyDelete
     */
    public function withExpand($expand): ByProjectKeyPaymentsKeyByKeyDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
