<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Cart\LineItem;
use Commercetools\Api\Models\Cart\LineItemBuilder;

/**
 * @implements Builder<OrderLineItemAddedMessagePayload>
 */
final class OrderLineItemAddedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?LineItemBuilder|LineItem
     */
    protected $lineItem;
    
    /**
     * @var ?int
     */
    protected $addedQuantity;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return LineItem|null
     */
    final public function getLineItem()
    {
       return ($this->lineItem instanceof LineItemBuilder ? $this->lineItem->build() : $this->lineItem);
    }
    
    /**
     *
     * @return int|null
     */
    final public function getAddedQuantity()
    {
       return $this->addedQuantity;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLineItem(?LineItem $lineItem)
    {
        $this->lineItem = $lineItem;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAddedQuantity(?int $addedQuantity)
    {
        $this->addedQuantity = $addedQuantity;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withLineItemBuilder(?LineItemBuilder $lineItem)
    {
        $this->lineItem = $lineItem;
        
        return $this;
    }
    
    public function build(): OrderLineItemAddedMessagePayload {
        return new OrderLineItemAddedMessagePayloadModel(
            $this->type,
            ($this->lineItem instanceof LineItemBuilder ? $this->lineItem->build() : $this->lineItem),
            $this->addedQuantity
        );
    }
    
    public static function of(): OrderLineItemAddedMessagePayloadBuilder
    {
        return new self();
    }
}