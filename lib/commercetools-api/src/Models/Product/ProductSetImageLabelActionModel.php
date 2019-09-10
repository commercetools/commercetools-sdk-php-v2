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


final class ProductSetImageLabelActionModel extends JsonObjectModel implements ProductSetImageLabelAction
{
    const DISCRIMINATOR_VALUE = 'setImageLabel';
    public function __construct(
        string $action = null,
        string $imageUrl = null,
        bool $staged = null,
        string $label = null,
        int $variantId = null,
        string $sku = null
    ) {
        $this->action = $action;
        $this->imageUrl = $imageUrl;
        $this->staged = $staged;
        $this->label = $label;
        $this->variantId = $variantId;
        $this->sku = $sku;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $imageUrl;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?string
     */
    protected $label;
    
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
     * @return string|null
     */
    final public function getImageUrl()
    {
       if (is_null($this->imageUrl)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductSetImageLabelAction::FIELD_IMAGE_URL);
           if (is_null($data)) {
               return null;
           }
           $this->imageUrl = (string)$data;
       }
       return $this->imageUrl;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductSetImageLabelAction::FIELD_STAGED);
           if (is_null($data)) {
               return null;
           }
           $this->staged = (bool)$data;
       }
       return $this->staged;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLabel()
    {
       if (is_null($this->label)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductSetImageLabelAction::FIELD_LABEL);
           if (is_null($data)) {
               return null;
           }
           $this->label = (string)$data;
       }
       return $this->label;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVariantId()
    {
       if (is_null($this->variantId)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductSetImageLabelAction::FIELD_VARIANT_ID);
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
           $data = $this->raw(ProductSetImageLabelAction::FIELD_SKU);
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
    
    final public function setImageUrl(?string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
    final public function setLabel(?string $label): void
    {
        $this->label = $label;
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