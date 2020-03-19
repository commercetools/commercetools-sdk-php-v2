<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\ApiClientException;
use Commercetools\Client\ApiRequest;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Ml\Models\GeneralCategoryRecommendations\GeneralCategoryRecommendationPagedQueryResponse;
use Commercetools\Ml\Models\GeneralCategoryRecommendations\GeneralCategoryRecommendationPagedQueryResponseModel;

use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyRecommendationsGeneralCategoriesGet extends ApiRequest
{
    /**
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '{projectKey}/recommendations/general-categories');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @return GeneralCategoryRecommendationPagedQueryResponse|JsonObject|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = GeneralCategoryRecommendationPagedQueryResponseModel::class;

                    break;
                default:
                    $resultType = JsonObjectModel::class;

                    break;
            }
        }

        return $resultType::of($this->responseData($response));
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     *
     * @return null|GeneralCategoryRecommendationPagedQueryResponse|JsonObject
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
            $response = $this->send($options);
        } catch (ServerException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiServerException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        } catch (ClientException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiClientException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        }

        return $this->mapFromResponse($response, $resultType);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $productImageUrl
     */
    public function withProductImageUrl($productImageUrl): ByProjectKeyRecommendationsGeneralCategoriesGet
    {
        return $this->withQueryParam('productImageUrl', $productImageUrl);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $productName
     */
    public function withProductName($productName): ByProjectKeyRecommendationsGeneralCategoriesGet
    {
        return $this->withQueryParam('productName', $productName);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $limit
     */
    public function withLimit($limit): ByProjectKeyRecommendationsGeneralCategoriesGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $offset
     */
    public function withOffset($offset): ByProjectKeyRecommendationsGeneralCategoriesGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $confidenceMin
     */
    public function withConfidenceMin($confidenceMin): ByProjectKeyRecommendationsGeneralCategoriesGet
    {
        return $this->withQueryParam('confidenceMin', $confidenceMin);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $confidenceMax
     */
    public function withConfidenceMax($confidenceMax): ByProjectKeyRecommendationsGeneralCategoriesGet
    {
        return $this->withQueryParam('confidenceMax', $confidenceMax);
    }
}
