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

use DateTimeImmutable;
use DateTimeImmutableModel;

final class CustomLineItemReturnItemModel extends JsonObjectModel implements CustomLineItemReturnItem
{
    const DISCRIMINATOR_VALUE = 'CustomLineItemReturnItem';
    public function __construct(
        string $shipmentState = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        int $quantity = null,
        string $comment = null,
        string $id = null,
        string $paymentState = null,
        string $type = null,
        string $customLineItemId = null
    ) {
        $this->shipmentState = $shipmentState;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->quantity = $quantity;
        $this->comment = $comment;
        $this->id = $id;
        $this->paymentState = $paymentState;
        $this->type = $type;
        $this->customLineItemId = $customLineItemId;
        
    }

    /**
     * @var ?string
     */
    protected $shipmentState;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?string
     */
    protected $comment;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?string
     */
    protected $paymentState;
    
    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?string
     */
    protected $customLineItemId;

    /**
     *
     * @return string|null
     */
    final public function getShipmentState()
    {
       if (is_null($this->shipmentState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItem::FIELD_SHIPMENT_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->shipmentState = (string)$data;
       }
       return $this->shipmentState;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItem::FIELD_CREATED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->createdAt = $data;
       }
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       if (is_null($this->lastModifiedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItem::FIELD_LAST_MODIFIED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->lastModifiedAt = $data;
       }
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ReturnItem::FIELD_QUANTITY);
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
    final public function getComment()
    {
       if (is_null($this->comment)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItem::FIELD_COMMENT);
           if (is_null($data)) {
               return null;
           }
           $this->comment = (string)$data;
       }
       return $this->comment;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItem::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPaymentState()
    {
       if (is_null($this->paymentState)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItem::FIELD_PAYMENT_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->paymentState = (string)$data;
       }
       return $this->paymentState;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ReturnItem::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCustomLineItemId()
    {
       if (is_null($this->customLineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomLineItemReturnItem::FIELD_CUSTOM_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->customLineItemId = (string)$data;
       }
       return $this->customLineItemId;
    }
    final public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }
    
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }
    
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }
    
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setCustomLineItemId(?string $customLineItemId): void
    {
        $this->customLineItemId = $customLineItemId;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[ReturnItem::FIELD_CREATED_AT]) && $data[ReturnItem::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[ReturnItem::FIELD_CREATED_AT] = $data[ReturnItem::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[ReturnItem::FIELD_LAST_MODIFIED_AT]) && $data[ReturnItem::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
           $data[ReturnItem::FIELD_LAST_MODIFIED_AT] = $data[ReturnItem::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}