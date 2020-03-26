<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Ml\Models\ImageSearch\ImageSearchResponse;
use Commercetools\Ml\Models\ImageSearch\ImageSearchResponseModel;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UploadedFileInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyImageSearchPost extends ApiRequest
{
    /**
     * @param ?UploadedFileInterface  $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, UploadedFileInterface $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}'], [$projectKey], '{projectKey}/image-search');
        if (!is_null($body)) {
            $mediaType = $body->getClientMediaType();
            if (!is_null($mediaType)) {
                $headers = $this->ensureHeader($headers, 'Content-Type', $mediaType);
            }
        }
        parent::__construct($client, 'POST', $uri, $headers, !is_null($body) ? $body->getStream() : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @return ImageSearchResponse|JsonObject|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ImageSearchResponseModel::class;

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
     * @return null|ImageSearchResponse|JsonObject
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
     * @psalm-param scalar|scalar[] $limit
     */
    public function withLimit($limit): ByProjectKeyImageSearchPost
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $offset
     */
    public function withOffset($offset): ByProjectKeyImageSearchPost
    {
        return $this->withQueryParam('offset', $offset);
    }
}
