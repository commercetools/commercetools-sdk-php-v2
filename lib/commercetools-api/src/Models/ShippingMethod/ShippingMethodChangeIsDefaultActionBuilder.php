<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingMethodChangeIsDefaultAction>
 */
final class ShippingMethodChangeIsDefaultActionBuilder implements Builder
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
    protected $isDefault;

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
    final public function getIsDefault()
    {
       return $this->isDefault;
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
    final public function withIsDefault(?bool $isDefault)
    {
        $this->isDefault = $isDefault;
        
        return $this;
    }
    
    public function build(): ShippingMethodChangeIsDefaultAction {
        return new ShippingMethodChangeIsDefaultActionModel(
            $this->action,
            $this->isDefault
        );
    }
    
    public static function of(): ShippingMethodChangeIsDefaultActionBuilder
    {
        return new self();
    }
}