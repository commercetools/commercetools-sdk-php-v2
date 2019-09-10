<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceModel;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceModel;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;

final class LineItemModel extends JsonObjectModel implements LineItem
{
    
    public function __construct(
        int $quantity = null,
        string $priceMode = null,
        string $productId = null,
        Money $totalPrice = null,
        TaxedItemPrice $taxedPrice = null,
        CustomFields $custom = null,
        DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity = null,
        LocalizedString $productSlug = null,
        TaxRate $taxRate = null,
        ItemShippingDetails $shippingDetails = null,
        Price $price = null,
        ProductVariant $variant = null,
        LocalizedString $name = null,
        ChannelReference $supplyChannel = null,
        ItemStateCollection $state = null,
        string $id = null,
        ChannelReference $distributionChannel = null,
        string $lineItemMode = null,
        ProductTypeReference $productType = null
    ) {
        $this->quantity = $quantity;
        $this->priceMode = $priceMode;
        $this->productId = $productId;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->custom = $custom;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        $this->productSlug = $productSlug;
        $this->taxRate = $taxRate;
        $this->shippingDetails = $shippingDetails;
        $this->price = $price;
        $this->variant = $variant;
        $this->name = $name;
        $this->supplyChannel = $supplyChannel;
        $this->state = $state;
        $this->id = $id;
        $this->distributionChannel = $distributionChannel;
        $this->lineItemMode = $lineItemMode;
        $this->productType = $productType;
        
    }

    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?string
     */
    protected $priceMode;
    
    /**
     * @var ?string
     */
    protected $productId;
    
    /**
     * @var ?Money
     */
    protected $totalPrice;
    
    /**
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;
    
    /**
     * @var ?CustomFields
     */
    protected $custom;
    
    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;
    
    /**
     * @var ?LocalizedString
     */
    protected $productSlug;
    
    /**
     * @var ?TaxRate
     */
    protected $taxRate;
    
    /**
     * @var ?ItemShippingDetails
     */
    protected $shippingDetails;
    
    /**
     * @var ?Price
     */
    protected $price;
    
    /**
     * @var ?ProductVariant
     */
    protected $variant;
    
    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?ChannelReference
     */
    protected $supplyChannel;
    
    /**
     * @var ?ItemStateCollection
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?ChannelReference
     */
    protected $distributionChannel;
    
    /**
     * @var ?string
     */
    protected $lineItemMode;
    
    /**
     * @var ?ProductTypeReference
     */
    protected $productType;

    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(LineItem::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPriceMode()
    {
       if (is_null($this->priceMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(LineItem::FIELD_PRICE_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->priceMode = (string)$data;
       }
       return $this->priceMode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getProductId()
    {
       if (is_null($this->productId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(LineItem::FIELD_PRODUCT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->productId = (string)$data;
       }
       return $this->productId;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getTotalPrice()
    {
       if (is_null($this->totalPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_TOTAL_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->totalPrice = MoneyModel::of($data);
       }
       return $this->totalPrice;
    }
    
    /**
     *
     * @return TaxedItemPrice|null
     */
    final public function getTaxedPrice()
    {
       if (is_null($this->taxedPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_TAXED_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxedPrice = TaxedItemPriceModel::of($data);
       }
       return $this->taxedPrice;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return DiscountedLineItemPriceForQuantityCollection|null
     */
    final public function getDiscountedPricePerQuantity()
    {
       if (is_null($this->discountedPricePerQuantity)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(LineItem::FIELD_DISCOUNTED_PRICE_PER_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->discountedPricePerQuantity = DiscountedLineItemPriceForQuantityCollection::fromArray($data);
       }
       return $this->discountedPricePerQuantity;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getProductSlug()
    {
       if (is_null($this->productSlug)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_PRODUCT_SLUG);
           if (is_null($data)) {
               return null;
           }
           
           $this->productSlug = LocalizedStringModel::of($data);
       }
       return $this->productSlug;
    }
    
    /**
     *
     * @return TaxRate|null
     */
    final public function getTaxRate()
    {
       if (is_null($this->taxRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_TAX_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxRate = TaxRateModel::of($data);
       }
       return $this->taxRate;
    }
    
    /**
     *
     * @return ItemShippingDetails|null
     */
    final public function getShippingDetails()
    {
       if (is_null($this->shippingDetails)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_SHIPPING_DETAILS);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingDetails = ItemShippingDetailsModel::of($data);
       }
       return $this->shippingDetails;
    }
    
    /**
     *
     * @return Price|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->price = PriceModel::of($data);
       }
       return $this->price;
    }
    
    /**
     *
     * @return ProductVariant|null
     */
    final public function getVariant()
    {
       if (is_null($this->variant)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_VARIANT);
           if (is_null($data)) {
               return null;
           }
           
           $this->variant = ProductVariantModel::of($data);
       }
       return $this->variant;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return ChannelReference|null
     */
    final public function getSupplyChannel()
    {
       if (is_null($this->supplyChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_SUPPLY_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->supplyChannel = ChannelReferenceModel::of($data);
       }
       return $this->supplyChannel;
    }
    
    /**
     *
     * @return ItemStateCollection|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(LineItem::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->state = ItemStateCollection::fromArray($data);
       }
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(LineItem::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return ChannelReference|null
     */
    final public function getDistributionChannel()
    {
       if (is_null($this->distributionChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_DISTRIBUTION_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->distributionChannel = ChannelReferenceModel::of($data);
       }
       return $this->distributionChannel;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLineItemMode()
    {
       if (is_null($this->lineItemMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(LineItem::FIELD_LINE_ITEM_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->lineItemMode = (string)$data;
       }
       return $this->lineItemMode;
    }
    
    /**
     *
     * @return ProductTypeReference|null
     */
    final public function getProductType()
    {
       if (is_null($this->productType)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItem::FIELD_PRODUCT_TYPE);
           if (is_null($data)) {
               return null;
           }
           
           $this->productType = ProductTypeReferenceModel::of($data);
       }
       return $this->productType;
    }
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setPriceMode(?string $priceMode): void
    {
        $this->priceMode = $priceMode;
    }
    
    final public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }
    
    final public function setTotalPrice(?Money $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }
    
    final public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }
    
    final public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
    }
    
    final public function setProductSlug(?LocalizedString $productSlug): void
    {
        $this->productSlug = $productSlug;
    }
    
    final public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }
    
    final public function setShippingDetails(?ItemShippingDetails $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }
    
    final public function setPrice(?Price $price): void
    {
        $this->price = $price;
    }
    
    final public function setVariant(?ProductVariant $variant): void
    {
        $this->variant = $variant;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setSupplyChannel(?ChannelReference $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }
    
    final public function setState(?ItemStateCollection $state): void
    {
        $this->state = $state;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setDistributionChannel(?ChannelReference $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }
    
    final public function setLineItemMode(?string $lineItemMode): void
    {
        $this->lineItemMode = $lineItemMode;
    }
    
    final public function setProductType(?ProductTypeReference $productType): void
    {
        $this->productType = $productType;
    }
    
}