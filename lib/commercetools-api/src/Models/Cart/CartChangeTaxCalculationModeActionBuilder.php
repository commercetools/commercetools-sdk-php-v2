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
 * @implements Builder<CartChangeTaxCalculationModeAction>
 */
final class CartChangeTaxCalculationModeActionBuilder implements Builder
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
    protected $taxCalculationMode;

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
    final public function getTaxCalculationMode()
    {
       return $this->taxCalculationMode;
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
    final public function withTaxCalculationMode(?string $taxCalculationMode)
    {
        $this->taxCalculationMode = $taxCalculationMode;
        
        return $this;
    }
    
    public function build(): CartChangeTaxCalculationModeAction {
        return new CartChangeTaxCalculationModeActionModel(
            $this->action,
            $this->taxCalculationMode
        );
    }
    
    public static function of(): CartChangeTaxCalculationModeActionBuilder
    {
        return new self();
    }
}