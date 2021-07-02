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
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ChannelKeyReferenceModel;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringModel;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceModel;
use Commercetools\Import\Models\Prices\TaxRate;
use Commercetools\Import\Models\Prices\TaxRateModel;
use stdClass;

/**
 * @internal
 */
final class LineItemImportDraftModel extends JsonObjectModel implements LineItemImportDraft
{
    /**
     * @var ?ProductKeyReference
     */
    protected $product;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LineItemProductVariantImportDraft
     */
    protected $variant;

    /**
     * @var ?LineItemPrice
     */
    protected $price;

    /**
     * @var ?float
     */
    protected $quantity;

    /**
     * @var ?ItemStateCollection
     */
    protected $state;

    /**
     * @var ?ChannelKeyReference
     */
    protected $supplyChannel;

    /**
     * @var ?ChannelKeyReference
     */
    protected $distributionChannel;

    /**
     * @var ?TaxRate
     */
    protected $taxRate;

    /**
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductKeyReference $product = null,
        ?LocalizedString $name = null,
        ?LineItemProductVariantImportDraft $variant = null,
        ?LineItemPrice $price = null,
        ?float $quantity = null,
        ?ItemStateCollection $state = null,
        ?ChannelKeyReference $supplyChannel = null,
        ?ChannelKeyReference $distributionChannel = null,
        ?TaxRate $taxRate = null,
        ?ItemShippingDetailsDraft $shippingDetails = null
    ) {
        $this->product = $product;
        $this->name = $name;
        $this->variant = $variant;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->state = $state;
        $this->supplyChannel = $supplyChannel;
        $this->distributionChannel = $distributionChannel;
        $this->taxRate = $taxRate;
        $this->shippingDetails = $shippingDetails;
    }

    /**
     * <p>Maps to <code>LineItem.productId</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductKeyReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>Maps to <code>LineItem.name</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Maps to <code>ProductVariantImportDraft</code>.</p>
     *
     * @return null|LineItemProductVariantImportDraft
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->variant = LineItemProductVariantImportDraftModel::of($data);
        }

        return $this->variant;
    }

    /**
     * <p>Maps to <code>LineItem.price</code>.</p>
     *
     * @return null|LineItemPrice
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = LineItemPriceModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p>Maps to <code>LineItem.quantity</code>.</p>
     *
     * @return null|float
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (float) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|ItemStateCollection
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = ItemStateCollection::fromArray($data);
        }

        return $this->state;
    }

    /**
     * <p>Maps to <code>LineItem.supplyChannel</code>.
     * The Reference to the Supply <a href="/../api/projects/channels#channel">Channel</a> with which the LineItem is associated.
     * If referenced Supply Channel does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>Unresolved</code> until the necessary Supply Channel is created.</p>
     *
     * @return null|ChannelKeyReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelKeyReferenceModel::of($data);
        }

        return $this->supplyChannel;
    }

    /**
     * <p>Maps to <code>LineItem.distributionChannel</code>.
     * The Reference to the Distribution <a href="/../api/projects/channels#channel">Channel</a> with which the LineItem is associated.
     * If referenced CustomerGroup does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>Unresolved</code> until the necessary Distribution Channel is created.</p>
     *
     * @return null|ChannelKeyReference
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->distributionChannel = ChannelKeyReferenceModel::of($data);
        }

        return $this->distributionChannel;
    }

    /**
     * <p>Maps to <code>LineItem.taxRate</code>.</p>
     *
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
     * <p>Maps to LineItem.shippingDetails.</p>
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
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LineItemProductVariantImportDraft $variant
     */
    public function setVariant(?LineItemProductVariantImportDraft $variant): void
    {
        $this->variant = $variant;
    }

    /**
     * @param ?LineItemPrice $price
     */
    public function setPrice(?LineItemPrice $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?ChannelKeyReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelKeyReference $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    /**
     * @param ?ChannelKeyReference $distributionChannel
     */
    public function setDistributionChannel(?ChannelKeyReference $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }
}
