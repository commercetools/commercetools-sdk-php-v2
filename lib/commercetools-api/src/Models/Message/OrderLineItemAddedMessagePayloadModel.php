<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Cart\LineItem;
use Commercetools\Api\Models\Cart\LineItemModel;

final class OrderLineItemAddedMessagePayloadModel extends JsonObjectModel implements OrderLineItemAddedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderLineItemAdded';
    public function __construct(
        string $type = null,
        LineItem $lineItem = null,
        int $addedQuantity = null
    ) {
        $this->type = $type;
        $this->lineItem = $lineItem;
        $this->addedQuantity = $addedQuantity;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?LineItem
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
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return LineItem|null
     */
    final public function getLineItem()
    {
       if (is_null($this->lineItem)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderLineItemAddedMessagePayload::FIELD_LINE_ITEM);
           if (is_null($data)) {
               return null;
           }
           
           $this->lineItem = LineItemModel::of($data);
       }
       return $this->lineItem;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getAddedQuantity()
    {
       if (is_null($this->addedQuantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(OrderLineItemAddedMessagePayload::FIELD_ADDED_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->addedQuantity = (int)$data;
       }
       return $this->addedQuantity;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setLineItem(?LineItem $lineItem): void
    {
        $this->lineItem = $lineItem;
    }
    
    final public function setAddedQuantity(?int $addedQuantity): void
    {
        $this->addedQuantity = $addedQuantity;
    }
    
}