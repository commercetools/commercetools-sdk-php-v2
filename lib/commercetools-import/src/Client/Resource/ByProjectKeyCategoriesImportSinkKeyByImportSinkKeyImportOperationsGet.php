<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\ResultMapper;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Import\Models\Importoperations\ImportOperationPagedResponse;
use Commercetools\Import\Models\Importoperations\ImportOperationPagedResponseModel;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet extends ApiRequest
{
    /**
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, string $importSinkKey, $body = null, array $headers = [], Client $client = null)
    {
        $uri = str_replace(['{projectKey}', '{importSinkKey}'], [$projectKey, $importSinkKey], '{projectKey}/categories/importSinkKey={importSinkKey}/import-operations');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return ImportOperationPagedResponse|JsonObject|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        $mapper = new ResultMapper();
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

        return $mapper->mapResponseToClass($resultType, $response);
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
     * @psalm-param scalar $limit
     *
     * @param mixed $limit
     */
    public function withLimit($limit): ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     * @psalm-param scalar $offset
     *
     * @param mixed $offset
     */
    public function withOffset($offset): ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     * @psalm-param scalar $resourceKey
     *
     * @param mixed $resourceKey
     */
    public function withResourceKey($resourceKey): ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        return $this->withQueryParam('resourceKey', $resourceKey);
    }

    /**
     * @psalm-param scalar $state
     *
     * @param mixed $state
     */
    public function withState($state): ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet
    {
        return $this->withQueryParam('state', $state);
    }
}
