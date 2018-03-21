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
use Commercetools\Types\Subscription\SubscriptionUpdate;


class ByProjectKeySubscriptionsByIDPost extends ApiRequest
{
    const RESULT_TYPE = Subscription::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, SubscriptionUpdate $body, array $headers = [])
    {
        $uri = sprintf('/%s/subscriptions/%s', $projectKey, $ID);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
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
     * @param $expand
     * @return ByProjectKeySubscriptionsByIDPost
     */
    public function withExpand($expand): ByProjectKeySubscriptionsByIDPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
