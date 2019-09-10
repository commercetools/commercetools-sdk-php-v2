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


final class CategorySetAssetTagsActionModel extends JsonObjectModel implements CategorySetAssetTagsAction
{
    const DISCRIMINATOR_VALUE = 'setAssetTags';
    public function __construct(
        string $action = null,
        string $assetId = null,
        string $assetKey = null,
        array $tags = null
    ) {
        $this->action = $action;
        $this->assetId = $assetId;
        $this->assetKey = $assetKey;
        $this->tags = $tags;
        
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
     * @var ?array
     */
    protected $tags;

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
           $data = $this->raw(CategorySetAssetTagsAction::FIELD_ASSET_ID);
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
           $data = $this->raw(CategorySetAssetTagsAction::FIELD_ASSET_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->assetKey = (string)$data;
       }
       return $this->assetKey;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getTags()
    {
       if (is_null($this->tags)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(CategorySetAssetTagsAction::FIELD_TAGS);
           if (is_null($data)) {
               return null;
           }
           $this->tags = $data;
       }
       return $this->tags;
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
    
    final public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }
    
}