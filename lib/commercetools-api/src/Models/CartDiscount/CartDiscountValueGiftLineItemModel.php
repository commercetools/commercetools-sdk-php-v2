<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartDiscountValueGiftLineItemModel extends JsonObjectModel implements CartDiscountValueGiftLineItem
{
    const DISCRIMINATOR_VALUE = 'giftLineItem';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ProductReference
     */
    protected $product;

    /**
     * @var ?ChannelReference
     */
    protected $supplyChannel;

    /**
     * @var ?int
     */
    protected $variantId;

    /**
     * @var ?ChannelReference
     */
    protected $distributionChannel;

    public function __construct(
        ProductReference $product = null,
        ChannelReference $supplyChannel = null,
        int $variantId = null,
        ChannelReference $distributionChannel = null
    ) {
        $this->product = $product;
        $this->supplyChannel = $supplyChannel;
        $this->variantId = $variantId;
        $this->distributionChannel = $distributionChannel;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountValue::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|ProductReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountValueGiftLineItem::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * @return null|ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountValueGiftLineItem::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel = ChannelReferenceModel::of($data);
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
            $data = $this->raw(CartDiscountValueGiftLineItem::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * @return null|ChannelReference
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountValueGiftLineItem::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->distributionChannel = ChannelReferenceModel::of($data);
        }

        return $this->distributionChannel;
    }

    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    public function setSupplyChannel(?ChannelReference $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    public function setDistributionChannel(?ChannelReference $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }
}
