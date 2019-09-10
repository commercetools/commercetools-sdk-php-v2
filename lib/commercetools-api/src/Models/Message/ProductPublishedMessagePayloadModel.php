<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionModel;

final class ProductPublishedMessagePayloadModel extends JsonObjectModel implements ProductPublishedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ProductPublished';
    public function __construct(
        string $type = null,
        array $removedImageUrls = null,
        ProductProjection $productProjection = null,
        string $scope = null
    ) {
        $this->type = $type;
        $this->removedImageUrls = $removedImageUrls;
        $this->productProjection = $productProjection;
        $this->scope = $scope;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?array
     */
    protected $removedImageUrls;
    
    /**
     * @var ?ProductProjection
     */
    protected $productProjection;
    
    /**
     * @var ?string
     */
    protected $scope;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getRemovedImageUrls()
    {
       if (is_null($this->removedImageUrls)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(ProductPublishedMessagePayload::FIELD_REMOVED_IMAGE_URLS);
           if (is_null($data)) {
               return null;
           }
           $this->removedImageUrls = $data;
       }
       return $this->removedImageUrls;
    }
    
    /**
     *
     * @return ProductProjection|null
     */
    final public function getProductProjection()
    {
       if (is_null($this->productProjection)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductPublishedMessagePayload::FIELD_PRODUCT_PROJECTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->productProjection = ProductProjectionModel::of($data);
       }
       return $this->productProjection;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getScope()
    {
       if (is_null($this->scope)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductPublishedMessagePayload::FIELD_SCOPE);
           if (is_null($data)) {
               return null;
           }
           $this->scope = (string)$data;
       }
       return $this->scope;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setRemovedImageUrls(?array $removedImageUrls): void
    {
        $this->removedImageUrls = $removedImageUrls;
    }
    
    final public function setProductProjection(?ProductProjection $productProjection): void
    {
        $this->productProjection = $productProjection;
    }
    
    final public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }
    
}