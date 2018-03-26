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

class ByProjectKeySubscriptionsKeyByKeyDelete extends ApiRequest
{
    const RESULT_TYPE = Subscription::class;

    /**
     * @param $projectKey
     * @param $key
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [])
    {
        $uri = str_replace(['{projectKey}', '{key}'], [$projectKey, $key], '/{projectKey}/subscriptions/key={key}');
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
     * @return ByProjectKeySubscriptionsKeyByKeyDelete
     */
    public function withVersion($version): ByProjectKeySubscriptionsKeyByKeyDelete
    {
        return $this->withQueryParam('version', $version);
    }
    /**
     * @param $expand
     * @return ByProjectKeySubscriptionsKeyByKeyDelete
     */
    public function withExpand($expand): ByProjectKeySubscriptionsKeyByKeyDelete
    {
        return $this->withQueryParam('expand', $expand);
    }

}
