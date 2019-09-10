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

use Commercetools\Api\Models\Common\Image;
use Commercetools\Api\Models\Common\ImageModel;

final class ProductAddExternalImageActionModel extends JsonObjectModel implements ProductAddExternalImageAction
{
    const DISCRIMINATOR_VALUE = 'addExternalImage';
    public function __construct(
        string $action = null,
        Image $image = null,
        bool $staged = null,
        int $variantId = null,
        string $sku = null
    ) {
        $this->action = $action;
        $this->image = $image;
        $this->staged = $staged;
        $this->variantId = $variantId;
        $this->sku = $sku;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?Image
     */
    protected $image;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
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
     * @return Image|null
     */
    final public function getImage()
    {
       if (is_null($this->image)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductAddExternalImageAction::FIELD_IMAGE);
           if (is_null($data)) {
               return null;
           }
           
           $this->image = ImageModel::of($data);
       }
       return $this->image;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductAddExternalImageAction::FIELD_STAGED);
           if (is_null($data)) {
               return null;
           }
           $this->staged = (bool)$data;
       }
       return $this->staged;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVariantId()
    {
       if (is_null($this->variantId)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductAddExternalImageAction::FIELD_VARIANT_ID);
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
           $data = $this->raw(ProductAddExternalImageAction::FIELD_SKU);
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
    
    final public function setImage(?Image $image): void
    {
        $this->image = $image;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
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