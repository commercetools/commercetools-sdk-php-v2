<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartRecalculateAction>
 */
final class CartRecalculateActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?bool
     */
    protected $updateProductData;

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
     * @return bool|null
     */
    final public function getUpdateProductData()
    {
       return $this->updateProductData;
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
    final public function withUpdateProductData(?bool $updateProductData)
    {
        $this->updateProductData = $updateProductData;
        
        return $this;
    }
    
    public function build(): CartRecalculateAction {
        return new CartRecalculateActionModel(
            $this->action,
            $this->updateProductData
        );
    }
    
    public static function of(): CartRecalculateActionBuilder
    {
        return new self();
    }
}