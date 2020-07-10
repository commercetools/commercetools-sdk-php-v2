<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Client\Resource;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Shared\Exception\InvalidArgumentException;
use Shared\Exception\ApiServerException;
use Shared\Exception\ApiClientException;
use Shared\Client\ApiRequest;
use Models\Importoperations\ImportOperationPagedResponse;
use Models\Importoperations\ImportOperationPagedResponseModel;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;

use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperationsGet extends ApiRequest
{
    /**
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, string $importSinkKey, $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}', '{importSinkKey}'], [$projectKey, $importSinkKey], '{projectKey}/prices/importSinkKey={importSinkKey}/import-operations');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @return ImportOperationPagedResponse|JsonObject|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = ImportOperationPagedResponseModel::class;

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
     * @return null|ImportOperationPagedResponse|JsonObject
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
    public function withLimit($limit): ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $offset
     */
    public function withOffset($offset): ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $resourceKey
     */
    public function withResourceKey($resourceKey): ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        return $this->withQueryParam('resourceKey', $resourceKey);
    }

    /**
     * 
     * @psalm-param scalar|scalar[] $state
     */
    public function withState($state): ByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        return $this->withQueryParam('state', $state);
    }
}
