<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ItemShippingDetails;
use Commercetools\Api\Models\Cart\ItemShippingDetailsModel;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Cart\TaxedItemPriceModel;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderLineItemRemovedMessagePayloadModel extends JsonObjectModel implements OrderLineItemRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderLineItemRemoved';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?string
     */
    protected $lineItemId;

    /**

     * @var ?int
     */
    protected $removedQuantity;

    /**

     * @var ?int
     */
    protected $newQuantity;

    /**

     * @var ?ItemStateCollection
     */
    protected $newState;

    /**

     * @var ?TypedMoney
     */
    protected $newTotalPrice;

    /**

     * @var ?TaxedItemPrice
     */
    protected $newTaxedPrice;

    /**

     * @var ?Price
     */
    protected $newPrice;

    /**

     * @var ?ItemShippingDetails
     */
    protected $newShippingDetail;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $lineItemId = null,
        ?int $removedQuantity = null,
        ?int $newQuantity = null,
        ?ItemStateCollection $newState = null,
        ?TypedMoney $newTotalPrice = null,
        ?TaxedItemPrice $newTaxedPrice = null,
        ?Price $newPrice = null,
        ?ItemShippingDetails $newShippingDetail = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->removedQuantity = $removedQuantity;
        $this->newQuantity = $newQuantity;
        $this->newState = $newState;
        $this->newTotalPrice = $newTotalPrice;
        $this->newTaxedPrice = $newTaxedPrice;
        $this->newPrice = $newPrice;
        $this->newShippingDetail = $newShippingDetail;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**

     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**

     * @return null|int
     */
    public function getRemovedQuantity()
    {
        if (is_null($this->removedQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_REMOVED_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->removedQuantity = (int) $data;
        }

        return $this->removedQuantity;
    }

    /**

     * @return null|int
     */
    public function getNewQuantity()
    {
        if (is_null($this->newQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_NEW_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->newQuantity = (int) $data;
        }

        return $this->newQuantity;
    }

    /**

     * @return null|ItemStateCollection
     */
    public function getNewState()
    {
        if (is_null($this->newState)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEW_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->newState = ItemStateCollection::fromArray($data);
        }

        return $this->newState;
    }

    /**
     * <p>Base polymorphic read-only Money type which is stored in cent precision or high precision. The actual type is determined by the <code>type</code> field.</p>
     *

     * @return null|TypedMoney
     */
    public function getNewTotalPrice()
    {
        if (is_null($this->newTotalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->newTotalPrice = $className::of($data);
        }

        return $this->newTotalPrice;
    }

    /**

     * @return null|TaxedItemPrice
     */
    public function getNewTaxedPrice()
    {
        if (is_null($this->newTaxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->newTaxedPrice = TaxedItemPriceModel::of($data);
        }

        return $this->newTaxedPrice;
    }

    /**

     * @return null|Price
     */
    public function getNewPrice()
    {
        if (is_null($this->newPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->newPrice = PriceModel::of($data);
        }

        return $this->newPrice;
    }

    /**

     * @return null|ItemShippingDetails
     */
    public function getNewShippingDetail()
    {
        if (is_null($this->newShippingDetail)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_SHIPPING_DETAIL);
            if (is_null($data)) {
                return null;
            }

            $this->newShippingDetail = ItemShippingDetailsModel::of($data);
        }

        return $this->newShippingDetail;
    }


    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?int $removedQuantity
     */
    public function setRemovedQuantity(?int $removedQuantity): void
    {
        $this->removedQuantity = $removedQuantity;
    }

    /**
     * @param ?int $newQuantity
     */
    public function setNewQuantity(?int $newQuantity): void
    {
        $this->newQuantity = $newQuantity;
    }

    /**
     * @param ?ItemStateCollection $newState
     */
    public function setNewState(?ItemStateCollection $newState): void
    {
        $this->newState = $newState;
    }

    /**
     * @param ?TypedMoney $newTotalPrice
     */
    public function setNewTotalPrice(?TypedMoney $newTotalPrice): void
    {
        $this->newTotalPrice = $newTotalPrice;
    }

    /**
     * @param ?TaxedItemPrice $newTaxedPrice
     */
    public function setNewTaxedPrice(?TaxedItemPrice $newTaxedPrice): void
    {
        $this->newTaxedPrice = $newTaxedPrice;
    }

    /**
     * @param ?Price $newPrice
     */
    public function setNewPrice(?Price $newPrice): void
    {
        $this->newPrice = $newPrice;
    }

    /**
     * @param ?ItemShippingDetails $newShippingDetail
     */
    public function setNewShippingDetail(?ItemShippingDetails $newShippingDetail): void
    {
        $this->newShippingDetail = $newShippingDetail;
    }
}
