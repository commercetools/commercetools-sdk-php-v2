<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Client\Resource;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\ClientException;
use Commercetools\Base\MapperInterface;
use Commercetools\Base\ResultMapper;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\ApiClientException;
use Commercetools\Client\ApiRequest;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Api\Models\Product\Product;
use Commercetools\Api\Models\Product\ProductModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyProductsKeyByKeyPost extends ApiRequest
{
    /**
     * @psalm-param scalar $projectKey
     * @psalm-param scalar $key
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     * @param array $headers
     */
    public function __construct($projectKey, $key, $body = null, array $headers = [], Client $client = null)
    {
        $uri = str_replace(['{projectKey}', '{key}'], [$projectKey, $key], '/{projectKey}/products/key={key}');
        parent::__construct($client, 'POST', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return ErrorResponse|JsonObject|Product|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        $mapper = new ResultMapper();
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case "200": $resultType = ProductModel::class; break;
                case "409": $resultType = ErrorResponseModel::class; break;
                case "400": $resultType = ErrorResponseModel::class; break;
                case "401": $resultType = ErrorResponseModel::class; break;
                case "403": $resultType = ErrorResponseModel::class; break;
                case "500": $resultType = ErrorResponseModel::class; break;
                case "503": $resultType = ErrorResponseModel::class; break;
                default:
                    $resultType = JsonObjectModel::class; break;
            }
        }
        return $mapper->mapResponseToClass($resultType, $response);
    }
    
    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @param array $options
     * @return ErrorResponse|JsonObject|Product|null
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
           $response = $this->send($options);
        } catch(ServerException $e) {
            $result = $this->mapFromResponse($e->getResponse());
            throw new ApiServerException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        } catch(ClientException $e) {
            $result = $this->mapFromResponse($e->getResponse());
            throw new ApiClientException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        }
        return $this->mapFromResponse($response, $resultType);
    }

   /**
    * 
    * @psalm-param scalar $priceCurrency
    */
   public function withPriceCurrency($priceCurrency): ByProjectKeyProductsKeyByKeyPost
   {
       return $this->withQueryParam('priceCurrency', $priceCurrency);
   }
   
   /**
    * 
    * @psalm-param scalar $priceCountry
    */
   public function withPriceCountry($priceCountry): ByProjectKeyProductsKeyByKeyPost
   {
       return $this->withQueryParam('priceCountry', $priceCountry);
   }
   
   /**
    * 
    * @psalm-param scalar $priceCustomerGroup
    */
   public function withPriceCustomerGroup($priceCustomerGroup): ByProjectKeyProductsKeyByKeyPost
   {
       return $this->withQueryParam('priceCustomerGroup', $priceCustomerGroup);
   }
   
   /**
    * 
    * @psalm-param scalar $priceChannel
    */
   public function withPriceChannel($priceChannel): ByProjectKeyProductsKeyByKeyPost
   {
       return $this->withQueryParam('priceChannel', $priceChannel);
   }
   
   /**
    * 
    * @psalm-param scalar $expand
    */
   public function withExpand($expand): ByProjectKeyProductsKeyByKeyPost
   {
       return $this->withQueryParam('expand', $expand);
   }
}