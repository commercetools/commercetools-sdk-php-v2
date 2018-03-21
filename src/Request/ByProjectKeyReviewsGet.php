<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\Review\ReviewPagedQueryResponse;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;

class ByProjectKeyReviewsGet extends ApiRequest
{
    const RESULT_TYPE = ReviewPagedQueryResponse::class;

    /**
     * @param $projectKey
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $body = null, array $headers = [])
    {
        $uri = sprintf('/%s/reviews', $projectKey);
        parent::__construct('get', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ReviewPagedQueryResponse
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ReviewPagedQueryResponse
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyReviewsGet
     */
    public function withExpand($expand): ByProjectKeyReviewsGet
    {
        return $this->withQueryParam('expand', $expand);
    }
    /**
     * @param $where
     * @return ByProjectKeyReviewsGet
     */
    public function withWhere($where): ByProjectKeyReviewsGet
    {
        return $this->withQueryParam('where', $where);
    }
    /**
     * @param $sort
     * @return ByProjectKeyReviewsGet
     */
    public function withSort($sort): ByProjectKeyReviewsGet
    {
        return $this->withQueryParam('sort', $sort);
    }
    /**
     * @param $limit
     * @return ByProjectKeyReviewsGet
     */
    public function withLimit($limit): ByProjectKeyReviewsGet
    {
        return $this->withQueryParam('limit', $limit);
    }
    /**
     * @param $offset
     * @return ByProjectKeyReviewsGet
     */
    public function withOffset($offset): ByProjectKeyReviewsGet
    {
        return $this->withQueryParam('offset', $offset);
    }
    /**
     * @param $withTotal
     * @return ByProjectKeyReviewsGet
     */
    public function withWithTotal($withTotal): ByProjectKeyReviewsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

}
