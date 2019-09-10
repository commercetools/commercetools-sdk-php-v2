<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ReturnItemDraftModel extends JsonObjectModel implements ReturnItemDraft
{
    
    public function __construct(
        string $shipmentState = null,
        string $customLineItemId = null,
        int $quantity = null,
        string $lineItemId = null,
        string $comment = null
    ) {
        $this->shipmentState = $shipmentState;
        $this->customLineItemId = $customLineItemId;
        $this->quantity = $quantity;
        $this->lineItemId = $lineItemId;
        $this->comment = $comment;
        
    }

    /**
     * @var ?string
     */
    protected $shipmentState;
    
    /**
     * @var ?string
     */
    protected $customLineItemId;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?string
     */
    protected $lineItemId;
    
    /**
     * @var ?string
     */
    protected $comment;

    /**
     *
     * @return string|null
     */
    final public function getShipmentState()
    {
       if (is_null($this->shipmentState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItemDraft::FIELD_SHIPMENT_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->shipmentState = (string)$data;
       }
       return $this->shipmentState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomLineItemId()
    {
       if (is_null($this->customLineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItemDraft::FIELD_CUSTOM_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customLineItemId = (string)$data;
       }
       return $this->customLineItemId;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ReturnItemDraft::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLineItemId()
    {
       if (is_null($this->lineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItemDraft::FIELD_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemId = (string)$data;
       }
       return $this->lineItemId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getComment()
    {
       if (is_null($this->comment)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItemDraft::FIELD_COMMENT);
           if (is_null($data)) {
               return null;
           }
           $this->comment = (string)$data;
       }
       return $this->comment;
    }
    final public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }
    
    final public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }
    
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }
    
    final public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
    
}