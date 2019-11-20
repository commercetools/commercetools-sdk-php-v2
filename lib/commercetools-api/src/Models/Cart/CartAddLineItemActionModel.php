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
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartAddLineItemActionModel extends JsonObjectModel implements CartAddLineItemAction
{
    const DISCRIMINATOR_VALUE = 'addLineItem';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;

    /**
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;

    /**
     * @var ?string
     */
    protected $productId;

    /**
     * @var ?ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;

    /**
     * @var ?int
     */
    protected $variantId;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $distributionChannel;

    /**
     * @var ?Money
     */
    protected $externalPrice;

    public function __construct(
        int $quantity = null,
        ExternalTaxRateDraft $externalTaxRate = null,
        ItemShippingDetailsDraft $shippingDetails = null,
        string $productId = null,
        ExternalLineItemTotalPrice $externalTotalPrice = null,
        CustomFieldsDraft $custom = null,
        ChannelResourceIdentifier $supplyChannel = null,
        int $variantId = null,
        string $sku = null,
        ChannelResourceIdentifier $distributionChannel = null,
        Money $externalPrice = null
    ) {
        $this->quantity = $quantity;
        $this->externalTaxRate = $externalTaxRate;
        $this->shippingDetails = $shippingDetails;
        $this->productId = $productId;
        $this->externalTotalPrice = $externalTotalPrice;
        $this->custom = $custom;
        $this->supplyChannel = $supplyChannel;
        $this->variantId = $variantId;
        $this->sku = $sku;
        $this->distributionChannel = $distributionChannel;
        $this->externalPrice = $externalPrice;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
        }

        return $this->externalTaxRate;
    }

    /**
     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails()
    {
        if (is_null($this->shippingDetails)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_SHIPPING_DETAILS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingDetails = ItemShippingDetailsDraftModel::of($data);
        }

        return $this->shippingDetails;
    }

    /**
     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId = (string) $data;
        }

        return $this->productId;
    }

    /**
     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        if (is_null($this->externalTotalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_EXTERNAL_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTotalPrice = ExternalLineItemTotalPriceModel::of($data);
        }

        return $this->externalTotalPrice;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->supplyChannel;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * @return null|ChannelResourceIdentifier
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->distributionChannel = ChannelResourceIdentifierModel::of($data);
        }

        return $this->distributionChannel;
    }

    /**
     * @return null|Money
     */
    public function getExternalPrice()
    {
        if (is_null($this->externalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartAddLineItemAction::FIELD_EXTERNAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->externalPrice = MoneyModel::of($data);
        }

        return $this->externalPrice;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }

    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }

    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void
    {
        $this->externalTotalPrice = $externalTotalPrice;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }

    public function setExternalPrice(?Money $externalPrice): void
    {
        $this->externalPrice = $externalPrice;
    }
}
