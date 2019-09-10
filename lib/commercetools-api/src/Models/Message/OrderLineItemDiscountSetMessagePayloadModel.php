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

use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Cart\TaxedItemPriceModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;

final class OrderLineItemDiscountSetMessagePayloadModel extends JsonObjectModel implements OrderLineItemDiscountSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderLineItemDiscountSet';
    public function __construct(
        string $type = null,
        Money $totalPrice = null,
        string $lineItemId = null,
        TaxedItemPrice $taxedPrice = null,
        DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity = null
    ) {
        $this->type = $type;
        $this->totalPrice = $totalPrice;
        $this->lineItemId = $lineItemId;
        $this->taxedPrice = $taxedPrice;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?Money
     */
    protected $totalPrice;
    
    /**
     * @var ?string
     */
    protected $lineItemId;
    
    /**
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;
    
    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;

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
     * @return Money|null
     */
    final public function getTotalPrice()
    {
       if (is_null($this->totalPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderLineItemDiscountSetMessagePayload::FIELD_TOTAL_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->totalPrice = MoneyModel::of($data);
       }
       return $this->totalPrice;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLineItemId()
    {
       if (is_null($this->lineItemId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(OrderLineItemDiscountSetMessagePayload::FIELD_LINE_ITEM_ID);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemId = (string)$data;
       }
       return $this->lineItemId;
    }
    
    /**
     *
     * @return TaxedItemPrice|null
     */
    final public function getTaxedPrice()
    {
       if (is_null($this->taxedPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(OrderLineItemDiscountSetMessagePayload::FIELD_TAXED_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxedPrice = TaxedItemPriceModel::of($data);
       }
       return $this->taxedPrice;
    }
    
    /**
     *
     * @return DiscountedLineItemPriceForQuantityCollection|null
     */
    final public function getDiscountedPricePerQuantity()
    {
       if (is_null($this->discountedPricePerQuantity)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(OrderLineItemDiscountSetMessagePayload::FIELD_DISCOUNTED_PRICE_PER_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->discountedPricePerQuantity = DiscountedLineItemPriceForQuantityCollection::fromArray($data);
       }
       return $this->discountedPricePerQuantity;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setTotalPrice(?Money $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }
    
    final public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }
    
    final public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }
    
    final public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
    }
    
}