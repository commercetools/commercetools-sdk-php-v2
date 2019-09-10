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
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;

/**
 * @implements Builder<CartSetCartTotalTaxAction>
 */
final class CartSetCartTotalTaxActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?TaxPortionCollection
     */
    protected $externalTaxPortions;
    
    /**
     * @var ?MoneyBuilder|Money
     */
    protected $externalTotalGross;

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
     * @return TaxPortionCollection|null
     */
    final public function getExternalTaxPortions()
    {
       return $this->externalTaxPortions;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getExternalTotalGross()
    {
       return ($this->externalTotalGross instanceof MoneyBuilder ? $this->externalTotalGross->build() : $this->externalTotalGross);
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
    final public function withExternalTaxPortions(?TaxPortionCollection $externalTaxPortions)
    {
        $this->externalTaxPortions = $externalTaxPortions;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withExternalTotalGross(?Money $externalTotalGross)
    {
        $this->externalTotalGross = $externalTotalGross;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withExternalTotalGrossBuilder(?MoneyBuilder $externalTotalGross)
    {
        $this->externalTotalGross = $externalTotalGross;
        
        return $this;
    }
    
    public function build(): CartSetCartTotalTaxAction {
        return new CartSetCartTotalTaxActionModel(
            $this->action,
            $this->externalTaxPortions,
            ($this->externalTotalGross instanceof MoneyBuilder ? $this->externalTotalGross->build() : $this->externalTotalGross)
        );
    }
    
    public static function of(): CartSetCartTotalTaxActionBuilder
    {
        return new self();
    }
}