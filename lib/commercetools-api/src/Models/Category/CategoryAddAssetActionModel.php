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

use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftModel;

final class CategoryAddAssetActionModel extends JsonObjectModel implements CategoryAddAssetAction
{
    const DISCRIMINATOR_VALUE = 'addAsset';
    public function __construct(
        string $action = null,
        int $position = null,
        AssetDraft $asset = null
    ) {
        $this->action = $action;
        $this->position = $position;
        $this->asset = $asset;
        
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
     * @var ?AssetDraft
     */
    protected $asset;

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
     * @return int|null
     */
    final public function getPosition()
    {
       if (is_null($this->position)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CategoryAddAssetAction::FIELD_POSITION);
           if (is_null($data)) {
               return null;
           }
           $this->position = (int)$data;
       }
       return $this->position;
    }
    
    /**
     *
     * @return AssetDraft|null
     */
    final public function getAsset()
    {
       if (is_null($this->asset)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CategoryAddAssetAction::FIELD_ASSET);
           if (is_null($data)) {
               return null;
           }
           
           $this->asset = AssetDraftModel::of($data);
       }
       return $this->asset;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setPosition(?int $position): void
    {
        $this->position = $position;
    }
    
    final public function setAsset(?AssetDraft $asset): void
    {
        $this->asset = $asset;
    }
    
}