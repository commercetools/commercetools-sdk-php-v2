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

final class ProductCreatedMessagePayloadModel extends JsonObjectModel implements ProductCreatedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ProductCreated';
    public function __construct(
        string $type = null,
        ProductProjection $productProjection = null
    ) {
        $this->type = $type;
        $this->productProjection = $productProjection;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ProductProjection
     */
    protected $productProjection;

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
     * @return ProductProjection|null
     */
    final public function getProductProjection()
    {
       if (is_null($this->productProjection)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductCreatedMessagePayload::FIELD_PRODUCT_PROJECTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->productProjection = ProductProjectionModel::of($data);
       }
       return $this->productProjection;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setProductProjection(?ProductProjection $productProjection): void
    {
        $this->productProjection = $productProjection;
    }
    
}