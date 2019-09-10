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

use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftModel;

final class ProductAddAssetActionModel extends JsonObjectModel implements ProductAddAssetAction
{
    const DISCRIMINATOR_VALUE = 'addAsset';
    public function __construct(
        string $action = null,
        int $position = null,
        bool $staged = null,
        int $variantId = null,
        AssetDraft $asset = null,
        string $sku = null
    ) {
        $this->action = $action;
        $this->position = $position;
        $this->staged = $staged;
        $this->variantId = $variantId;
        $this->asset = $asset;
        $this->sku = $sku;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $position;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?AssetDraft
     */
    protected $asset;
    
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
    final public function getPosition()
    {
       if (is_null($this->position)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductAddAssetAction::FIELD_POSITION);
           if (is_null($data)) {
               return null;
           }
           $this->position = (int)$data;
       }
       return $this->position;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductAddAssetAction::FIELD_STAGED);
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
           $data = $this->raw(ProductAddAssetAction::FIELD_VARIANT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->variantId = (int)$data;
       }
       return $this->variantId;
    }
    
    /**
     *
     * @return AssetDraft|null
     */
    final public function getAsset()
    {
       if (is_null($this->asset)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductAddAssetAction::FIELD_ASSET);
           if (is_null($data)) {
               return null;
           }
           
           $this->asset = AssetDraftModel::of($data);
       }
       return $this->asset;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       if (is_null($this->sku)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductAddAssetAction::FIELD_SKU);
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
    
    final public function setPosition(?int $position): void
    {
        $this->position = $position;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
    final public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }
    
    final public function setAsset(?AssetDraft $asset): void
    {
        $this->asset = $asset;
    }
    
    final public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
    
}