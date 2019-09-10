<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CategoryRemoveAssetActionModel extends JsonObjectModel implements CategoryRemoveAssetAction
{
    const DISCRIMINATOR_VALUE = 'removeAsset';
    public function __construct(
        string $action = null,
        string $assetId = null,
        string $assetKey = null
    ) {
        $this->action = $action;
        $this->assetId = $assetId;
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
    protected $assetKey;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CategoryUpdateAction::FIELD_ACTION);
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
           $data = $this->raw(CategoryRemoveAssetAction::FIELD_ASSET_ID);
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
    final public function getAssetKey()
    {
       if (is_null($this->assetKey)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CategoryRemoveAssetAction::FIELD_ASSET_KEY);
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
    
    final public function setAssetKey(?string $assetKey): void
    {
        $this->assetKey = $assetKey;
    }
    
}