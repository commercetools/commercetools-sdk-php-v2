<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\InvalidArgumentException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UploadedFileInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyProductsByIDImagesPost extends ApiRequest
{
    /**
     * @param ?UploadedFileInterface  $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, string $ID, UploadedFileInterface $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}', '{ID}'], [$projectKey, $ID], '{projectKey}/products/{ID}/images');
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
     * @return JsonObject|Product|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ProductModel::class;

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
     * @return null|JsonObject|Product
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
     * @psalm-param scalar $filename
     */
    public function withFilename($filename): ByProjectKeyProductsByIDImagesPost
    {
        return $this->withQueryParam('filename', $filename);
    }

    /**
     *
     * @psalm-param scalar $variant
     */
    public function withVariant($variant): ByProjectKeyProductsByIDImagesPost
    {
        return $this->withQueryParam('variant', $variant);
    }

    /**
     *
     * @psalm-param scalar $sku
     */
    public function withSku($sku): ByProjectKeyProductsByIDImagesPost
    {
        return $this->withQueryParam('sku', $sku);
    }

    /**
     *
     * @psalm-param scalar $staged
     */
    public function withStaged($staged): ByProjectKeyProductsByIDImagesPost
    {
        return $this->withQueryParam('staged', $staged);
    }
}
