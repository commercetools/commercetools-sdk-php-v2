<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Subscription\Subscription;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeySubscriptionsByIDDelete extends ApiRequest
{
    const RESULT_TYPE = Subscription::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '/{projectKey}/subscriptions/{ID}');
        parent::__construct('delete', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return Subscription
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  Subscription
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $version
     * @return ByProjectKeySubscriptionsByIDDelete
     */
    public function withVersion($version): ByProjectKeySubscriptionsByIDDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeySubscriptionsByIDDelete
     */
    public function withExpand($expand): ByProjectKeySubscriptionsByIDDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
