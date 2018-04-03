<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\TaxCategory\TaxRate;
use Commercetools\Types\Order\ItemState;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Order\ItemStateCollection;
use Commercetools\Types\ProductType\ProductTypeReference;
use Commercetools\Types\Common\Price;
use Commercetools\Types\Common\Money;
use Commercetools\Types\Product\ProductVariant;

class LineItemModel extends JsonObjectModel implements LineItem {
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $productId;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $productSlug;
    /**
     * @var ProductTypeReference
     */
    protected $productType;
    /**
     * @var ProductVariant
     */
    protected $variant;
    /**
     * @var Price
     */
    protected $price;
    /**
     * @var TaxedItemPrice
     */
    protected $taxedPrice;
    /**
     * @var Money
     */
    protected $totalPrice;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var ItemStateCollection
     */
    protected $state;
    /**
     * @var TaxRate
     */
    protected $taxRate;
    /**
     * @var ChannelReference
     */
    protected $supplyChannel;
    /**
     * @var ChannelReference
     */
    protected $distributionChannel;
    /**
     * @var DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;
    /**
     * @var string
     */
    protected $priceMode;
    /**
     * @var string
     */
    protected $lineItemMode;
    /**
     * @var CustomFields
     */
    protected $custom;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(LineItem::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            $value = $this->raw(LineItem::FIELD_PRODUCT_ID);
            $value = (string)$value;
            $this->productId = $value;
        }
        return $this->productId;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(LineItem::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return LocalizedString
     */
    public function getProductSlug()
    {
        if (is_null($this->productSlug)) {
            $value = $this->raw(LineItem::FIELD_PRODUCT_SLUG);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->productSlug = $value;
        }
        return $this->productSlug;
    }
    /**
     * @return ProductTypeReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            $value = $this->raw(LineItem::FIELD_PRODUCT_TYPE);
            if (is_null($value)) {
                return $this->mapData(ProductTypeReference::class, null);
            }
            $value = $this->mapData(ProductTypeReference::class, $value);

            $this->productType = $value;
        }
        return $this->productType;
    }
    /**
     * @return ProductVariant
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            $value = $this->raw(LineItem::FIELD_VARIANT);
            if (is_null($value)) {
                return $this->mapData(ProductVariant::class, null);
            }
            $value = $this->mapData(ProductVariant::class, $value);

            $this->variant = $value;
        }
        return $this->variant;
    }
    /**
     * @return Price
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(LineItem::FIELD_PRICE);
            if (is_null($value)) {
                return $this->mapData(Price::class, null);
            }
            $value = $this->mapData(Price::class, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            $value = $this->raw(LineItem::FIELD_TAXED_PRICE);
            if (is_null($value)) {
                return $this->mapData(TaxedItemPrice::class, null);
            }
            $value = $this->mapData(TaxedItemPrice::class, $value);

            $this->taxedPrice = $value;
        }
        return $this->taxedPrice;
    }
    /**
     * @return Money
     */
    public function getTotalPrice()
    {
        if (is_null($this->totalPrice)) {
            $value = $this->raw(LineItem::FIELD_TOTAL_PRICE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->totalPrice = $value;
        }
        return $this->totalPrice;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(LineItem::FIELD_QUANTITY);
            $value = (int)$value;
            $this->quantity = $value;
        }
        return $this->quantity;
    }
    /**
     * @return ItemStateCollection
     */
    public function getState()
    {
        if (is_null($this->state)) {
            $value = $this->raw(LineItem::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(ItemStateCollection::class, null);
            }
            $value = $this->mapData(ItemStateCollection::class, $value);
            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return TaxRate
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            $value = $this->raw(LineItem::FIELD_TAX_RATE);
            if (is_null($value)) {
                return $this->mapData(TaxRate::class, null);
            }
            $value = $this->mapData(TaxRate::class, $value);

            $this->taxRate = $value;
        }
        return $this->taxRate;
    }
    /**
     * @return ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            $value = $this->raw(LineItem::FIELD_SUPPLY_CHANNEL);
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
            $value = $this->raw(LineItem::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->distributionChannel = $value;
        }
        return $this->distributionChannel;
    }
    /**
     * @return DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        if (is_null($this->discountedPricePerQuantity)) {
            $value = $this->raw(LineItem::FIELD_DISCOUNTED_PRICE_PER_QUANTITY);
            if (is_null($value)) {
                return $this->mapData(DiscountedLineItemPriceForQuantityCollection::class, null);
            }
            $value = $this->mapData(DiscountedLineItemPriceForQuantityCollection::class, $value);
            $this->discountedPricePerQuantity = $value;
        }
        return $this->discountedPricePerQuantity;
    }
    /**
     * @return string
     */
    public function getPriceMode()
    {
        if (is_null($this->priceMode)) {
            $value = $this->raw(LineItem::FIELD_PRICE_MODE);
            $value = (string)$value;
            $this->priceMode = $value;
        }
        return $this->priceMode;
    }
    /**
     * @return string
     */
    public function getLineItemMode()
    {
        if (is_null($this->lineItemMode)) {
            $value = $this->raw(LineItem::FIELD_LINE_ITEM_MODE);
            $value = (string)$value;
            $this->lineItemMode = $value;
        }
        return $this->lineItemMode;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(LineItem::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

        return $this;
    }
    /**
     * @param string $productId
     * @return $this
     */
    public function setProductId(string $productId)
    {
        $this->productId = (string)$productId;

        return $this;
    }
    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param LocalizedString $productSlug
     * @return $this
     */
    public function setProductSlug(LocalizedString $productSlug)
    {
        $this->productSlug = $productSlug;

        return $this;
    }
    /**
     * @param ProductTypeReference $productType
     * @return $this
     */
    public function setProductType(ProductTypeReference $productType)
    {
        $this->productType = $productType;

        return $this;
    }
    /**
     * @param ProductVariant $variant
     * @return $this
     */
    public function setVariant(ProductVariant $variant)
    {
        $this->variant = $variant;

        return $this;
    }
    /**
     * @param Price $price
     * @return $this
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;

        return $this;
    }
    /**
     * @param TaxedItemPrice $taxedPrice
     * @return $this
     */
    public function setTaxedPrice(TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }
    /**
     * @param Money $totalPrice
     * @return $this
     */
    public function setTotalPrice(Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }
    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = (int)$quantity;

        return $this;
    }
    /**
     * @param ItemStateCollection $state
     * @return $this
     */
    public function setState(ItemStateCollection $state)
    {
        $this->state = $state;

        return $this;
    }
    /**
     * @param TaxRate $taxRate
     * @return $this
     */
    public function setTaxRate(TaxRate $taxRate)
    {
        $this->taxRate = $taxRate;

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
    /**
     * @param DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     * @return $this
     */
    public function setDiscountedPricePerQuantity(DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity)
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;

        return $this;
    }
    /**
     * @param string $priceMode
     * @return $this
     */
    public function setPriceMode(string $priceMode)
    {
        $this->priceMode = (string)$priceMode;

        return $this;
    }
    /**
     * @param string $lineItemMode
     * @return $this
     */
    public function setLineItemMode(string $lineItemMode)
    {
        $this->lineItemMode = (string)$lineItemMode;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

}
