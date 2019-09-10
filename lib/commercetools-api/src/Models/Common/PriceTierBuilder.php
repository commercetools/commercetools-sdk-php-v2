<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PriceTier>
 */
final class PriceTierBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?MoneyBuilder|Money
     */
    protected $value;
    
    /**
     * @var ?int
     */
    protected $minimumQuantity;

    /**
     *
     * @return Money|null
     */
    final public function getValue()
    {
       return ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value);
    }
    
    /**
     *
     * @return int|null
     */
    final public function getMinimumQuantity()
    {
       return $this->minimumQuantity;
    }
    /**
     * @return $this
     */
    final public function withValue(?Money $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMinimumQuantity(?int $minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): PriceTier {
        return new PriceTierModel(
            ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value),
            $this->minimumQuantity
        );
    }
    
    public static function of(): PriceTierBuilder
    {
        return new self();
    }
}