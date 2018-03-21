<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Subscription\SubscriptionPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeySubscriptionsGet extends ApiRequest
{
    const RESULT_TYPE = SubscriptionPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/subscriptions', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return SubscriptionPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  SubscriptionPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeySubscriptionsGet
     */
    public function withExpand($expand): ByProjectKeySubscriptionsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeySubscriptionsGet
     */
    public function withWhere($where): ByProjectKeySubscriptionsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeySubscriptionsGet
     */
    public function withSort($sort): ByProjectKeySubscriptionsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeySubscriptionsGet
     */
    public function withLimit($limit): ByProjectKeySubscriptionsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeySubscriptionsGet
     */
    public function withOffset($offset): ByProjectKeySubscriptionsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeySubscriptionsGet
     */
    public function withWithTotal($withTotal): ByProjectKeySubscriptionsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
