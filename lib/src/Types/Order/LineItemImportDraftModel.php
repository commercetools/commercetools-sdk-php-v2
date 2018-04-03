<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\TaxCategory\TaxRate;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\Price;

class LineItemImportDraftModel extends JsonObjectModel implements LineItemImportDraft {
    /**
     * @var string
     */
    protected $productId;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var ProductVariantImportDraft
     */
    protected $variant;
    /**
     * @var Price
     */
    protected $price;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var ItemStateCollection
     */
    protected $state;
    /**
     * @var ChannelReference
     */
    protected $supplyChannel;
    /**
     * @var TaxRate
     */
    protected $taxRate;
    /**
     * @var CustomFieldsDraft
     */
    protected $custom;

    /**
     * @return string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            $value = $this->raw(LineItemImportDraft::FIELD_PRODUCT_ID);
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
            $value = $this->raw(LineItemImportDraft::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return ProductVariantImportDraft
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            $value = $this->raw(LineItemImportDraft::FIELD_VARIANT);
            if (is_null($value)) {
                return $this->mapData(ProductVariantImportDraft::class, null);
            }
            $value = $this->mapData(ProductVariantImportDraft::class, $value);

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
            $value = $this->raw(LineItemImportDraft::FIELD_PRICE);
            if (is_null($value)) {
                return $this->mapData(Price::class, null);
            }
            $value = $this->mapData(Price::class, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            $value = $this->raw(LineItemImportDraft::FIELD_QUANTITY);
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
            $value = $this->raw(LineItemImportDraft::FIELD_STATE);
            if (is_null($value)) {
                return $this->mapData(ItemStateCollection::class, null);
            }
            $value = $this->mapData(ItemStateCollection::class, $value);
            $this->state = $value;
        }
        return $this->state;
    }
    /**
     * @return ChannelReference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            $value = $this->raw(LineItemImportDraft::FIELD_SUPPLY_CHANNEL);
            if (is_null($value)) {
                return $this->mapData(ChannelReference::class, null);
            }
            $value = $this->mapData(ChannelReference::class, $value);

            $this->supplyChannel = $value;
        }
        return $this->supplyChannel;
    }
    /**
     * @return TaxRate
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            $value = $this->raw(LineItemImportDraft::FIELD_TAX_RATE);
            if (is_null($value)) {
                return $this->mapData(TaxRate::class, null);
            }
            $value = $this->mapData(TaxRate::class, $value);

            $this->taxRate = $value;
        }
        return $this->taxRate;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(LineItemImportDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
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
     * @param ProductVariantImportDraft $variant
     * @return $this
     */
    public function setVariant(ProductVariantImportDraft $variant)
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
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel)
    {
        $this->supplyChannel = $supplyChannel;

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
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

}
