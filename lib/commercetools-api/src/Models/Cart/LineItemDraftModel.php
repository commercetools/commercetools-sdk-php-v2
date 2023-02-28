<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class LineItemDraftModel extends JsonObjectModel implements LineItemDraft
{
    /**
     *
     * @var ?string
     */
    protected $productId;

    /**
     *
     * @var ?int
     */
    protected $variantId;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?int
     */
    protected $quantity;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $addedAt;

    /**
     *
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;

    /**
     *
     * @var ?ChannelResourceIdentifier
     */
    protected $distributionChannel;

    /**
     *
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;

    /**
     *
     * @var ?Money
     */
    protected $externalPrice;

    /**
     *
     * @var ?ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;

    /**
     *
     * @var ?string
     */
    protected $inventoryMode;

    /**
     *
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $productId = null,
        ?int $variantId = null,
        ?string $sku = null,
        ?int $quantity = null,
        ?DateTimeImmutable $addedAt = null,
        ?ChannelResourceIdentifier $supplyChannel = null,
        ?ChannelResourceIdentifier $distributionChannel = null,
        ?ExternalTaxRateDraft $externalTaxRate = null,
        ?Money $externalPrice = null,
        ?ExternalLineItemTotalPrice $externalTotalPrice = null,
        ?string $inventoryMode = null,
        ?ItemShippingDetailsDraft $shippingDetails = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->sku = $sku;
        $this->quantity = $quantity;
        $this->addedAt = $addedAt;
        $this->supplyChannel = $supplyChannel;
        $this->distributionChannel = $distributionChannel;
        $this->externalTaxRate = $externalTaxRate;
        $this->externalPrice = $externalPrice;
        $this->externalTotalPrice = $externalTotalPrice;
        $this->inventoryMode = $inventoryMode;
        $this->shippingDetails = $shippingDetails;
        $this->custom = $custom;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Product">Product</a>.</p>
     *
     *
     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId = (string) $data;
        }

        return $this->productId;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> in the Product.
     * If not provided, the Master Variant is used.</p>
     *
     *
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * <p><code>sku</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>Number of Product Variants to add to the Cart.</p>
     *
     *
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * <p>Date and time (UTC) the Product Variant is added to the Cart.
     * If not set, it defaults to the current date and time.</p>
     * <p>Optional for backwards compatibility reasons.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getAddedAt()
    {
        if (is_null($this->addedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->addedAt = $data;
        }

        return $this->addedAt;
    }

    /**
     * <p>Used to identify <a href="/../api/projects/inventory">Inventory entries</a> that must be reserved.
     * The referenced Channel must have the <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     *
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->supplyChannel;
    }

    /**
     * <p>Used to <a href="ctp:api:type:LineItemPriceSelection">select</a> a Product Price.
     * The referenced Channel must have the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
     * <p>If the Cart is bound to a <a href="ctp:api:type:Store">Store</a> with <code>distributionChannels</code> set,
     * the Channel must match one of the Store's distribution channels.</p>
     *
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->distributionChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->distributionChannel;
    }

    /**
     * <p>External Tax Rate for the Line Item if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *
     *
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
        }

        return $this->externalTaxRate;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:LineItem">LineItem</a> <code>price</code> value, and the <code>priceMode</code> to <code>ExternalPrice</code> <a href="ctp:api:type:LineItemPriceMode">LineItemPriceMode</a>.</p>
     *
     *
     * @return null|Money
     */
    public function getExternalPrice()
    {
        if (is_null($this->externalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->externalPrice = MoneyModel::of($data);
        }

        return $this->externalPrice;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:LineItem">LineItem</a> <code>price</code> and <code>totalPrice</code> values, and the <code>priceMode</code> to <code>ExternalTotal</code> <a href="ctp:api:type:LineItemPriceMode">LineItemPriceMode</a>.</p>
     *
     *
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        if (is_null($this->externalTotalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTotalPrice = ExternalLineItemTotalPriceModel::of($data);
        }

        return $this->externalTotalPrice;
    }

    /**
     * <p>Inventory mode specific to the Line Item only, and valid for the entire <code>quantity</code> of the Line Item.
     * Set only if the inventory mode should be different from the <code>inventoryMode</code> specified on the <a href="ctp:api:type:Cart">Cart</a>.</p>
     *
     *
     * @return null|string
     */
    public function getInventoryMode()
    {
        if (is_null($this->inventoryMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INVENTORY_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->inventoryMode = (string) $data;
        }

        return $this->inventoryMode;
    }

    /**
     * <p>Container for Line Item-specific addresses.</p>
     *
     *
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        if (is_null($this->shippingDetails)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_DETAILS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingDetails = ItemShippingDetailsDraftModel::of($data);
        }

        return $this->shippingDetails;
    }

    /**
     * <p>Custom Fields for the Line Item.</p>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?DateTimeImmutable $addedAt
     */
    public function setAddedAt(?DateTimeImmutable $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    /**
     * @param ?ChannelResourceIdentifier $supplyChannel
     */
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    /**
     * @param ?ChannelResourceIdentifier $distributionChannel
     */
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }

    /**
     * @param ?Money $externalPrice
     */
    public function setExternalPrice(?Money $externalPrice): void
    {
        $this->externalPrice = $externalPrice;
    }

    /**
     * @param ?ExternalLineItemTotalPrice $externalTotalPrice
     */
    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void
    {
        $this->externalTotalPrice = $externalTotalPrice;
    }

    /**
     * @param ?string $inventoryMode
     */
    public function setInventoryMode(?string $inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[LineItemDraft::FIELD_ADDED_AT]) && $data[LineItemDraft::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
            $data[LineItemDraft::FIELD_ADDED_AT] = $data[LineItemDraft::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
