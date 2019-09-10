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


final class ProductSetAssetCustomFieldActionModel extends JsonObjectModel implements ProductSetAssetCustomFieldAction
{
    const DISCRIMINATOR_VALUE = 'setAssetCustomField';
    public function __construct(
        string $action = null,
        string $assetId = null,
        string $name = null,
        bool $staged = null,
        int $variantId = null,
        string $sku = null,
        JsonObject $value = null,
        string $assetKey = null
    ) {
        $this->action = $action;
        $this->assetId = $assetId;
        $this->name = $name;
        $this->staged = $staged;
        $this->variantId = $variantId;
        $this->sku = $sku;
        $this->value = $value;
        $this->assetKey = $assetKey;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $assetId;
    
    /**
     * @var ?string
     */
    protected $name;
    
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
     * @var ?JsonObject
     */
    protected $value;
    
    /**
     * @var ?string
     */
    protected $assetKey;

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
    final public function getAssetId()
    {
       if (is_null($this->assetId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductSetAssetCustomFieldAction::FIELD_ASSET_ID);
           if (is_null($data)) {
               return null;
           }
           $this->assetId = (string)$data;
       }
       return $this->assetId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductSetAssetCustomFieldAction::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductSetAssetCustomFieldAction::FIELD_STAGED);
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
           $data = $this->raw(ProductSetAssetCustomFieldAction::FIELD_VARIANT_ID);
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
           $data = $this->raw(ProductSetAssetCustomFieldAction::FIELD_SKU);
           if (is_null($data)) {
               return null;
           }
           $this->sku = (string)$data;
       }
       return $this->sku;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(ProductSetAssetCustomFieldAction::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->value = JsonObjectModel::of($data);
       }
       return $this->value;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAssetKey()
    {
       if (is_null($this->assetKey)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductSetAssetCustomFieldAction::FIELD_ASSET_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->assetKey = (string)$data;
       }
       return $this->assetKey;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAssetId(?string $assetId): void
    {
        $this->assetId = $assetId;
    }
    
    final public function setName(?string $name): void
    {
        $this->name = $name;
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
    
    final public function setValue(?JsonObject $value): void
    {
        $this->value = $value;
    }
    
    final public function setAssetKey(?string $assetKey): void
    {
        $this->assetKey = $assetKey;
    }
    
}