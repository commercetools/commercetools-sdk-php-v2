<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ProductLegacySetSkuActionModel extends JsonObjectModel implements ProductLegacySetSkuAction
{
    const DISCRIMINATOR_VALUE = 'legacySetSku';
    public function __construct(
        string $action = null,
        int $variantId = null,
        string $sku = null
    ) {
        $this->action = $action;
        $this->variantId = $variantId;
        $this->sku = $sku;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVariantId()
    {
       if (is_null($this->variantId)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductLegacySetSkuAction::FIELD_VARIANT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->variantId = (int)$data;
       }
       return $this->variantId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       if (is_null($this->sku)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductLegacySetSkuAction::FIELD_SKU);
           if (is_null($data)) {
               return null;
           }
           $this->sku = (string)$data;
       }
       return $this->sku;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }
    
    final public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
    
}