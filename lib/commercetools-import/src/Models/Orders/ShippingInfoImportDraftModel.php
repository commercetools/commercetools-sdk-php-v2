<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ShippingMethodKeyReference;
use Commercetools\Import\Models\Common\ShippingMethodKeyReferenceModel;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReferenceModel;
use Commercetools\Import\Models\Common\TypedMoney;
use Commercetools\Import\Models\Common\TypedMoneyModel;
use Commercetools\Import\Models\Prices\TaxRate;
use Commercetools\Import\Models\Prices\TaxRateModel;
use stdClass;

/**
 * @internal
 */
final class ShippingInfoImportDraftModel extends JsonObjectModel implements ShippingInfoImportDraft
{
    /**
     * @var ?string
     */
    protected $shippingMethodName;

    /**
     * @var ?TypedMoney
     */
    protected $price;

    /**
     * @var ?ShippingRateDraft
     */
    protected $shippingRate;

    /**
     * @var ?TaxRate
     */
    protected $taxRate;

    /**
     * @var ?TaxCategoryKeyReference
     */
    protected $taxCategory;

    /**
     * @var ?ShippingMethodKeyReference
     */
    protected $shippingMethod;

    /**
     * @var ?DeliveryCollection
     */
    protected $deliveries;

    /**
     * @var ?DiscountedLineItemPriceDraft
     */
    protected $discountedPrice;

    /**
     * @var ?string
     */
    protected $shippingMethodState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $shippingMethodName = null,
        ?TypedMoney $price = null,
        ?ShippingRateDraft $shippingRate = null,
        ?TaxRate $taxRate = null,
        ?TaxCategoryKeyReference $taxCategory = null,
        ?ShippingMethodKeyReference $shippingMethod = null,
        ?DeliveryCollection $deliveries = null,
        ?DiscountedLineItemPriceDraft $discountedPrice = null,
        ?string $shippingMethodState = null
    ) {
        $this->shippingMethodName = $shippingMethodName;
        $this->price = $price;
        $this->shippingRate = $shippingRate;
        $this->taxRate = $taxRate;
        $this->taxCategory = $taxCategory;
        $this->shippingMethod = $shippingMethod;
        $this->deliveries = $deliveries;
        $this->discountedPrice = $discountedPrice;
        $this->shippingMethodState = $shippingMethodState;
    }

    /**
     * @return null|string
     */
    public function getShippingMethodName()
    {
        if (is_null($this->shippingMethodName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMethodName = (string) $data;
        }

        return $this->shippingMethodName;
    }

    /**
     * @return null|TypedMoney
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->price = $className::of($data);
        }

        return $this->price;
    }

    /**
     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        if (is_null($this->shippingRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->shippingRate = ShippingRateDraftModel::of($data);
        }

        return $this->shippingRate;
    }

    /**
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->taxRate = TaxRateModel::of($data);
        }

        return $this->taxRate;
    }

    /**
     * <p>References a tax category by its key.</p>
     *
     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryKeyReferenceModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * <p>References a shipping method by its key.</p>
     *
     * @return null|ShippingMethodKeyReference
     */
    public function getShippingMethod()
    {
        if (is_null($this->shippingMethod)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD);
            if (is_null($data)) {
                return null;
            }

            $this->shippingMethod = ShippingMethodKeyReferenceModel::of($data);
        }

        return $this->shippingMethod;
    }

    /**
     * @return null|DeliveryCollection
     */
    public function getDeliveries()
    {
        if (is_null($this->deliveries)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DELIVERIES);
            if (is_null($data)) {
                return null;
            }
            $this->deliveries = DeliveryCollection::fromArray($data);
        }

        return $this->deliveries;
    }

    /**
     * @return null|DiscountedLineItemPriceDraft
     */
    public function getDiscountedPrice()
    {
        if (is_null($this->discountedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->discountedPrice = DiscountedLineItemPriceDraftModel::of($data);
        }

        return $this->discountedPrice;
    }

    /**
     * @return null|string
     */
    public function getShippingMethodState()
    {
        if (is_null($this->shippingMethodState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMethodState = (string) $data;
        }

        return $this->shippingMethodState;
    }


    /**
     * @param ?string $shippingMethodName
     */
    public function setShippingMethodName(?string $shippingMethodName): void
    {
        $this->shippingMethodName = $shippingMethodName;
    }

    /**
     * @param ?TypedMoney $price
     */
    public function setPrice(?TypedMoney $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?ShippingRateDraft $shippingRate
     */
    public function setShippingRate(?ShippingRateDraft $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    /**
     * @param ?TaxCategoryKeyReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryKeyReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @param ?ShippingMethodKeyReference $shippingMethod
     */
    public function setShippingMethod(?ShippingMethodKeyReference $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    /**
     * @param ?DeliveryCollection $deliveries
     */
    public function setDeliveries(?DeliveryCollection $deliveries): void
    {
        $this->deliveries = $deliveries;
    }

    /**
     * @param ?DiscountedLineItemPriceDraft $discountedPrice
     */
    public function setDiscountedPrice(?DiscountedLineItemPriceDraft $discountedPrice): void
    {
        $this->discountedPrice = $discountedPrice;
    }

    /**
     * @param ?string $shippingMethodState
     */
    public function setShippingMethodState(?string $shippingMethodState): void
    {
        $this->shippingMethodState = $shippingMethodState;
    }
}
