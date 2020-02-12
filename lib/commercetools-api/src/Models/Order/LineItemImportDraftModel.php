<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftModel;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Common\LocalizedString;

use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class LineItemImportDraftModel extends JsonObjectModel implements LineItemImportDraft
{
    /**
     * @var ?string
     */
    protected $productId;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?ProductVariantImportDraft
     */
    protected $variant;

    /**
     * @var ?PriceDraft
     */
    protected $price;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?ItemStateCollection
     */
    protected $state;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $distributionChannel;

    /**
     * @var ?TaxRate
     */
    protected $taxRate;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;


    public function __construct(
        string $productId = null,
        LocalizedString $name = null,
        ProductVariantImportDraft $variant = null,
        PriceDraft $price = null,
        int $quantity = null,
        ItemStateCollection $state = null,
        ChannelResourceIdentifier $supplyChannel = null,
        ChannelResourceIdentifier $distributionChannel = null,
        TaxRate $taxRate = null,
        CustomFieldsDraft $custom = null,
        ItemShippingDetailsDraft $shippingDetails = null
    ) {
        $this->productId = $productId;
        $this->name = $name;
        $this->variant = $variant;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->state = $state;
        $this->supplyChannel = $supplyChannel;
        $this->distributionChannel = $distributionChannel;
        $this->taxRate = $taxRate;
        $this->custom = $custom;
        $this->shippingDetails = $shippingDetails;
    }

    /**
     * <p>ID of the existing product.
     * You also need to specify the ID of the variant if this property is set or alternatively you can just specify SKU of the product variant.</p>
     *
     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(LineItemImportDraft::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId = (string) $data;
        }

        return $this->productId;
    }

    /**
     * <p>The product name.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LineItemImportDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|ProductVariantImportDraft
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LineItemImportDraft::FIELD_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->variant = ProductVariantImportDraftModel::of($data);
        }

        return $this->variant;
    }

    /**
     * @return null|PriceDraft
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LineItemImportDraft::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = PriceDraftModel::of($data);
        }

        return $this->price;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(LineItemImportDraft::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|ItemStateCollection
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(LineItemImportDraft::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = ItemStateCollection::fromArray($data);
        }

        return $this->state;
    }

    /**
     * <p>Optional connection to a particular supplier.
     * By providing supply channel information, you can uniquely identify
     * inventory entries that should be reserved.
     * The provided channel should have the
     * InventorySupply role.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LineItemImportDraft::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->supplyChannel;
    }

    /**
     * <p>The channel is used to select a ProductPrice.
     * The provided channel should have the ProductDistribution role.</p>
     *
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LineItemImportDraft::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->distributionChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->distributionChannel;
    }

    /**
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LineItemImportDraft::FIELD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->taxRate = TaxRateModel::of($data);
        }

        return $this->taxRate;
    }

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LineItemImportDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        if (is_null($this->shippingDetails)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(LineItemImportDraft::FIELD_SHIPPING_DETAILS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingDetails = ItemShippingDetailsDraftModel::of($data);
        }

        return $this->shippingDetails;
    }

    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setVariant(?ProductVariantImportDraft $variant): void
    {
        $this->variant = $variant;
    }

    public function setPrice(?PriceDraft $price): void
    {
        $this->price = $price;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setState(?ItemStateCollection $state): void
    {
        $this->state = $state;
    }

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }

    public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }
}
