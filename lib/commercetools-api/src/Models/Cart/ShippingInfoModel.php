<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Order\DeliveryCollection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReference;
use Commercetools\Api\Models\ShippingMethod\ShippingMethodReferenceModel;

use Commercetools\Api\Models\ShippingMethod\ShippingRate;
use Commercetools\Api\Models\ShippingMethod\ShippingRateModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingInfoModel extends JsonObjectModel implements ShippingInfo
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
     * @var ?ShippingRate
     */
    protected $shippingRate;

    /**
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;

    /**
     * @var ?TaxRate
     */
    protected $taxRate;

    /**
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;

    /**
     * @var ?ShippingMethodReference
     */
    protected $shippingMethod;

    /**
     * @var ?DeliveryCollection
     */
    protected $deliveries;

    /**
     * @var ?DiscountedLineItemPrice
     */
    protected $discountedPrice;

    /**
     * @var ?string
     */
    protected $shippingMethodState;


    public function __construct(
        string $shippingMethodName = null,
        TypedMoney $price = null,
        ShippingRate $shippingRate = null,
        TaxedItemPrice $taxedPrice = null,
        TaxRate $taxRate = null,
        TaxCategoryReference $taxCategory = null,
        ShippingMethodReference $shippingMethod = null,
        DeliveryCollection $deliveries = null,
        DiscountedLineItemPrice $discountedPrice = null,
        string $shippingMethodState = null
    ) {
        $this->shippingMethodName = $shippingMethodName;
        $this->price = $price;
        $this->shippingRate = $shippingRate;
        $this->taxedPrice = $taxedPrice;
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
            $data = $this->raw(ShippingInfo::FIELD_SHIPPING_METHOD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMethodName = (string) $data;
        }

        return $this->shippingMethodName;
    }

    /**
     * <p>Determined based on the ShippingRate and its tiered prices, and either the sum of LineItem prices or the <code>shippingRateInput</code> field.</p>
     *
     * @return null|TypedMoney
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingInfo::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = TypedMoneyModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p>The shipping rate used to determine the price.</p>
     *
     * @return null|ShippingRate
     */
    public function getShippingRate()
    {
        if (is_null($this->shippingRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingInfo::FIELD_SHIPPING_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->shippingRate = ShippingRateModel::of($data);
        }

        return $this->shippingRate;
    }

    /**
     * <p>Set once the <code>taxRate</code> is set.</p>
     *
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingInfo::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedItemPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * <p>Will be set automatically in the <code>Platform</code> TaxMode once the shipping address is set is set.
     * For the <code>External</code> tax mode the tax rate has to be set explicitly with the ExternalTaxRateDraft.</p>
     *
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingInfo::FIELD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->taxRate = TaxRateModel::of($data);
        }

        return $this->taxRate;
    }

    /**
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingInfo::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryReferenceModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * <p>Not set if custom shipping method is used.</p>
     *
     * @return null|ShippingMethodReference
     */
    public function getShippingMethod()
    {
        if (is_null($this->shippingMethod)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingInfo::FIELD_SHIPPING_METHOD);
            if (is_null($data)) {
                return null;
            }

            $this->shippingMethod = ShippingMethodReferenceModel::of($data);
        }

        return $this->shippingMethod;
    }

    /**
     * <p>Deliveries are compilations of information on how the articles are being delivered to the customers.</p>
     *
     * @return null|DeliveryCollection
     */
    public function getDeliveries()
    {
        if (is_null($this->deliveries)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ShippingInfo::FIELD_DELIVERIES);
            if (is_null($data)) {
                return null;
            }
            $this->deliveries = DeliveryCollection::fromArray($data);
        }

        return $this->deliveries;
    }

    /**
     * @return null|DiscountedLineItemPrice
     */
    public function getDiscountedPrice()
    {
        if (is_null($this->discountedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingInfo::FIELD_DISCOUNTED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->discountedPrice = DiscountedLineItemPriceModel::of($data);
        }

        return $this->discountedPrice;
    }

    /**
     * <p>Indicates whether the ShippingMethod referenced in this ShippingInfo is allowed for the cart or not.</p>
     *
     * @return null|string
     */
    public function getShippingMethodState()
    {
        if (is_null($this->shippingMethodState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingInfo::FIELD_SHIPPING_METHOD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMethodState = (string) $data;
        }

        return $this->shippingMethodState;
    }

    public function setShippingMethodName(?string $shippingMethodName): void
    {
        $this->shippingMethodName = $shippingMethodName;
    }

    public function setPrice(?TypedMoney $price): void
    {
        $this->price = $price;
    }

    public function setShippingRate(?ShippingRate $shippingRate): void
    {
        $this->shippingRate = $shippingRate;
    }

    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    public function setTaxCategory(?TaxCategoryReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    public function setShippingMethod(?ShippingMethodReference $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    public function setDeliveries(?DeliveryCollection $deliveries): void
    {
        $this->deliveries = $deliveries;
    }

    public function setDiscountedPrice(?DiscountedLineItemPrice $discountedPrice): void
    {
        $this->discountedPrice = $discountedPrice;
    }

    public function setShippingMethodState(?string $shippingMethodState): void
    {
        $this->shippingMethodState = $shippingMethodState;
    }
}
