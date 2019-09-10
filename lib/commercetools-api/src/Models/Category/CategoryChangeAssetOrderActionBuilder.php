<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryChangeAssetOrderAction>
 */
final class CategoryChangeAssetOrderActionBuilder implements Builder
{
    public function __construct() {
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
       return $this->action;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getAssetOrder()
    {
       return $this->assetOrder;
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAssetOrder(?array $assetOrder)
    {
        $this->assetOrder = $assetOrder;
        
        return $this;
    }
    
    public function build(): CategoryChangeAssetOrderAction {
        return new CategoryChangeAssetOrderActionModel(
            $this->action,
            $this->assetOrder
        );
    }
    
    public static function of(): CategoryChangeAssetOrderActionBuilder
    {
        return new self();
    }
}