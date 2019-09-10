<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceBuilder;

/**
 * @implements Builder<ItemState>
 */
final class ItemStateBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?StateReferenceBuilder|StateReference
     */
    protected $state;

    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       return $this->quantity;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getState()
    {
       return ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state);
    }
    /**
     * @return $this
     */
    final public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withState(?StateReference $state)
    {
        $this->state = $state;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withStateBuilder(?StateReferenceBuilder $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    public function build(): ItemState {
        return new ItemStateModel(
            $this->quantity,
            ($this->state instanceof StateReferenceBuilder ? $this->state->build() : $this->state)
        );
    }
    
    public static function of(): ItemStateBuilder
    {
        return new self();
    }
}