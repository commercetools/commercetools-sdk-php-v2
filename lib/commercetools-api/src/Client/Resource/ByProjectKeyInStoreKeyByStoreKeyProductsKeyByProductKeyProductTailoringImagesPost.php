<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\ProductTailoring\ProductTailoring;
use Commercetools\Api\Models\ProductTailoring\ProductTailoringModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\ExceptionFactory;
use Commercetools\Exception\InvalidArgumentException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UploadedFileInterface;

/**

 * @psalm-suppress PropertyNotSetInConstructor
 *
 */
class ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringImagesPost extends ApiRequest
{
    /**
     * @param ?UploadedFileInterface  $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, string $storeKey, string $productKey, UploadedFileInterface $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}', '{storeKey}', '{productKey}'], [$projectKey, $storeKey, $productKey], '{projectKey}/in-store/key={storeKey}/products/key={productKey}/product-tailoring/images');
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
     * @return JsonObject|ProductTailoring|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ProductTailoringModel::class;

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
     * @return null|T|JsonObject|ProductTailoring
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
            $response = $this->send($options);
        } catch (ServerException $e) {
            $response = $e->getResponse();
            $e = ExceptionFactory::createServerException($e, $this, $response, $this->mapFromResponse($response, $resultType));
            throw $e;
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $e = ExceptionFactory::createClientException($e, $this, $response, $this->mapFromResponse($response, $resultType));
            throw $e;
        }

        return $this->mapFromResponse($response, $resultType);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     *
     * @return PromiseInterface
     */
    public function executeAsync(array $options = [], string $resultType = null)
    {
        return $this->sendAsync($options)->then(
            function (ResponseInterface $response) use ($resultType) {
                return $this->mapFromResponse($response, $resultType);
            },
            function (RequestException $e) use ($resultType) {
                $response = $e->getResponse();
                if ($e instanceof ServerException) {
                    $e = ExceptionFactory::createServerException($e, $this, $response, $this->mapFromResponse($response, $resultType));
                }
                if ($e instanceof ClientException) {
                    $e = ExceptionFactory::createClientException($e, $this, $response, $this->mapFromResponse($response, $resultType));
                }
                throw $e;
            }
        );
    }

    /**
     *
     * @psalm-param scalar|scalar[] $filename
     */
    public function withFilename($filename): ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringImagesPost
    {
        return $this->withQueryParam('filename', $filename);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $variant
     */
    public function withVariant($variant): ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringImagesPost
    {
        return $this->withQueryParam('variant', $variant);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $sku
     */
    public function withSku($sku): ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringImagesPost
    {
        return $this->withQueryParam('sku', $sku);
    }

    /**
     *
     * @psalm-param scalar|scalar[] $staged
     */
    public function withStaged($staged): ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringImagesPost
    {
        return $this->withQueryParam('staged', $staged);
    }
}
