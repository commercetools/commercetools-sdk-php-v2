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
 * @implements Builder<TaxPortion>
 */
final class TaxPortionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?MoneyBuilder|Money
     */
    protected $amount;
    
    /**
     * @var ?int
     */
    protected $rate;
    
    /**
     * @var ?string
     */
    protected $name;

    /**
     *
     * @return Money|null
     */
    final public function getAmount()
    {
       return ($this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount);
    }
    
    /**
     *
     * @return int|null
     */
    final public function getRate()
    {
       return $this->rate;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       return $this->name;
    }
    /**
     * @return $this
     */
    final public function withAmount(?Money $amount)
    {
        $this->amount = $amount;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withRate(?int $rate)
    {
        $this->rate = $rate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withAmountBuilder(?MoneyBuilder $amount)
    {
        $this->amount = $amount;
        
        return $this;
    }
    
    public function build(): TaxPortion {
        return new TaxPortionModel(
            ($this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount),
            $this->rate,
            $this->name
        );
    }
    
    public static function of(): TaxPortionBuilder
    {
        return new self();
    }
}