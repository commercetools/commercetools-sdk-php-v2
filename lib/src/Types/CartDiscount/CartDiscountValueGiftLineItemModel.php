<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\CartDiscount\CartDiscountValueModel;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\Product\ProductReference;

class CartDiscountValueGiftLineItemModel extends CartDiscountValueModel implements CartDiscountValueGiftLineItem
{
    const DISCRIMINATOR_VALUE = 'giftLineItem';

    /**
     * @var ProductReference
     */
    protected $product;
    /**
     * @var int
     */
    protected $variantId;
    /**
     * @var ChannelReference
     */
    protected $supplyChannel;
    /**
     * @var ChannelReference
     */
    protected $distributionChannel;

    /**
     * @return ProductReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            $value = $this->raw(CartDiscountValueGiftLineItem::FIELD_PRODUCT);
            if (is_null($value)) {
                return $this->mapData(ProductReference::class, null);
            }
            $value = $this->mapData(ProductReference::class, $value);

            $this->product = $value;
        }
        return $this->product;
    }
    /**
     * @return int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            $value = $this->raw(CartDiscountValueGiftLineItem::FIELD_VARIANT_ID);
            $value = (int)$value;
            $this->variantId = $value;
        }
        return $this->variantId;
    }
    /**
     * @return ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            $value = $this->raw(CartDiscountValueGiftLineItem::FIELD_SUPPLY_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->supplyChannel = $value;
        }
        return $this->supplyChannel;
    }
    /**
     * @return ChannelReference
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            $value = $this->raw(CartDiscountValueGiftLineItem::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->distributionChannel = $value;
        }
        return $this->distributionChannel;
    }

    /**
     * @param ProductReference $product
     * @return $this
     */
    public function setProduct(ProductReference $product)
    {
        $this->product = $product;

        return $this;
    }
    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId)
    {
        $this->variantId = (int)$variantId;

        return $this;
    }
    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

        return $this;
    }
    /**
     * @param ChannelReference $distributionChannel
     * @return $this
     */
    public function setDistributionChannel(ChannelReference $distributionChannel)
    {
        $this->distributionChannel = $distributionChannel;

        return $this;
    }

}
