<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftModel;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
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
final class MyLineItemDraftModel extends JsonObjectModel implements MyLineItemDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

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
        ?string $key = null,
        ?string $productId = null,
        ?int $variantId = null,
        ?string $sku = null,
        ?int $quantity = null,
        ?DateTimeImmutable $addedAt = null,
        ?ChannelResourceIdentifier $supplyChannel = null,
        ?ChannelResourceIdentifier $distributionChannel = null,
        ?ItemShippingDetailsDraft $shippingDetails = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->key = $key;
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->sku = $sku;
        $this->quantity = $quantity;
        $this->addedAt = $addedAt;
        $this->supplyChannel = $supplyChannel;
        $this->distributionChannel = $distributionChannel;
        $this->shippingDetails = $shippingDetails;
        $this->custom = $custom;
    }

    /**
     * <p>User-defined unique identifier of the LineItem.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
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
     * The Channel must have the <code>InventorySupply</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
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
     * The Channel must have the <code>ProductDistribution</code> <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a>.</p>
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
     * <p>Custom Fields for the Cart.</p>
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
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
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
        if (isset($data[MyLineItemDraft::FIELD_ADDED_AT]) && $data[MyLineItemDraft::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
            $data[MyLineItemDraft::FIELD_ADDED_AT] = $data[MyLineItemDraft::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
