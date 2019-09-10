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
 * @implements Builder<CartChangeTaxRoundingModeAction>
 */
final class CartChangeTaxRoundingModeActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?string
     */
    protected $taxRoundingMode;

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
     * @return string|null
     */
    final public function getTaxRoundingMode()
    {
       return $this->taxRoundingMode;
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
    final public function withTaxRoundingMode(?string $taxRoundingMode)
    {
        $this->taxRoundingMode = $taxRoundingMode;
        
        return $this;
    }
    
    public function build(): CartChangeTaxRoundingModeAction {
        return new CartChangeTaxRoundingModeActionModel(
            $this->action,
            $this->taxRoundingMode
        );
    }
    
    public static function of(): CartChangeTaxRoundingModeActionBuilder
    {
        return new self();
    }
}