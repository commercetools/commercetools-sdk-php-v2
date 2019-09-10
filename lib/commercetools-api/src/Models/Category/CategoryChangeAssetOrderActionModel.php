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


final class CategoryChangeAssetOrderActionModel extends JsonObjectModel implements CategoryChangeAssetOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeAssetOrder';
    public function __construct(
        string $action = null,
        array $assetOrder = null
    ) {
        $this->action = $action;
        $this->assetOrder = $assetOrder;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?array
     */
    protected $assetOrder;

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
     * @return array|null
     */
    final public function getAssetOrder()
    {
       if (is_null($this->assetOrder)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(CategoryChangeAssetOrderAction::FIELD_ASSET_ORDER);
           if (is_null($data)) {
               return null;
           }
           $this->assetOrder = $data;
       }
       return $this->assetOrder;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setAssetOrder(?array $assetOrder): void
    {
        $this->assetOrder = $assetOrder;
    }
    
}