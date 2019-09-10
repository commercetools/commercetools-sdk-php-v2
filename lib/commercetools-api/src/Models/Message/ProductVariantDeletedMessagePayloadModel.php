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

use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantModel;

final class ProductVariantDeletedMessagePayloadModel extends JsonObjectModel implements ProductVariantDeletedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ProductVariantDeleted';
    public function __construct(
        string $type = null,
        array $removedImageUrls = null,
        ProductVariant $variant = null
    ) {
        $this->type = $type;
        $this->removedImageUrls = $removedImageUrls;
        $this->variant = $variant;
        
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
     * @var ?ProductVariant
     */
    protected $variant;

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
           $data = $this->raw(ProductVariantDeletedMessagePayload::FIELD_REMOVED_IMAGE_URLS);
           if (is_null($data)) {
               return null;
           }
           $this->removedImageUrls = $data;
       }
       return $this->removedImageUrls;
    }
    
    /**
     *
     * @return ProductVariant|null
     */
    final public function getVariant()
    {
       if (is_null($this->variant)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductVariantDeletedMessagePayload::FIELD_VARIANT);
           if (is_null($data)) {
               return null;
           }
           
           $this->variant = ProductVariantModel::of($data);
       }
       return $this->variant;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setRemovedImageUrls(?array $removedImageUrls): void
    {
        $this->removedImageUrls = $removedImageUrls;
    }
    
    final public function setVariant(?ProductVariant $variant): void
    {
        $this->variant = $variant;
    }
    
}