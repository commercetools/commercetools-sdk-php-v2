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

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;

final class CustomLineItemModel extends JsonObjectModel implements CustomLineItem
{
    
    public function __construct(
        TaxRate $taxRate = null,
        int $quantity = null,
        ItemShippingDetails $shippingDetails = null,
        TypedMoney $money = null,
        TypedMoney $totalPrice = null,
        TaxedItemPrice $taxedPrice = null,
        CustomFields $custom = null,
        LocalizedString $name = null,
        ItemStateCollection $state = null,
        string $id = null,
        DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity = null,
        string $slug = null,
        TaxCategoryReference $taxCategory = null
    ) {
        $this->taxRate = $taxRate;
        $this->quantity = $quantity;
        $this->shippingDetails = $shippingDetails;
        $this->money = $money;
        $this->totalPrice = $totalPrice;
        $this->taxedPrice = $taxedPrice;
        $this->custom = $custom;
        $this->name = $name;
        $this->state = $state;
        $this->id = $id;
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
        $this->slug = $slug;
        $this->taxCategory = $taxCategory;
        
    }

    /**
     * @var ?TaxRate
     */
    protected $taxRate;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?ItemShippingDetails
     */
    protected $shippingDetails;
    
    /**
     * @var ?TypedMoney
     */
    protected $money;
    
    /**
     * @var ?TypedMoney
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
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?ItemStateCollection
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    protected $discountedPricePerQuantity;
    
    /**
     * @var ?string
     */
    protected $slug;
    
    /**
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;

    /**
     *
     * @return TaxRate|null
     */
    final public function getTaxRate()
    {
       if (is_null($this->taxRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItem::FIELD_TAX_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxRate = TaxRateModel::of($data);
       }
       return $this->taxRate;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CustomLineItem::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return ItemShippingDetails|null
     */
    final public function getShippingDetails()
    {
       if (is_null($this->shippingDetails)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItem::FIELD_SHIPPING_DETAILS);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingDetails = ItemShippingDetailsModel::of($data);
       }
       return $this->shippingDetails;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getMoney()
    {
       if (is_null($this->money)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItem::FIELD_MONEY);
           if (is_null($data)) {
               return null;
           }
           $className = TypedMoneyModel::resolveDiscriminatorClass($data);
           $this->money = $className::of($data);
       }
       return $this->money;
    }
    
    /**
     *
     * @return TypedMoney|null
     */
    final public function getTotalPrice()
    {
       if (is_null($this->totalPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItem::FIELD_TOTAL_PRICE);
           if (is_null($data)) {
               return null;
           }
           $className = TypedMoneyModel::resolveDiscriminatorClass($data);
           $this->totalPrice = $className::of($data);
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
           $data = $this->raw(CustomLineItem::FIELD_TAXED_PRICE);
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
           $data = $this->raw(CustomLineItem::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItem::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return ItemStateCollection|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CustomLineItem::FIELD_STATE);
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
           $data = $this->raw(CustomLineItem::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return DiscountedLineItemPriceForQuantityCollection|null
     */
    final public function getDiscountedPricePerQuantity()
    {
       if (is_null($this->discountedPricePerQuantity)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CustomLineItem::FIELD_DISCOUNTED_PRICE_PER_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->discountedPricePerQuantity = DiscountedLineItemPriceForQuantityCollection::fromArray($data);
       }
       return $this->discountedPricePerQuantity;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSlug()
    {
       if (is_null($this->slug)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomLineItem::FIELD_SLUG);
           if (is_null($data)) {
               return null;
           }
           $this->slug = (string)$data;
       }
       return $this->slug;
    }
    
    /**
     *
     * @return TaxCategoryReference|null
     */
    final public function getTaxCategory()
    {
       if (is_null($this->taxCategory)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomLineItem::FIELD_TAX_CATEGORY);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxCategory = TaxCategoryReferenceModel::of($data);
       }
       return $this->taxCategory;
    }
    final public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }
    
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setShippingDetails(?ItemShippingDetails $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }
    
    final public function setMoney(?TypedMoney $money): void
    {
        $this->money = $money;
    }
    
    final public function setTotalPrice(?TypedMoney $totalPrice): void
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
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setState(?ItemStateCollection $state): void
    {
        $this->state = $state;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity): void
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;
    }
    
    final public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }
    
    final public function setTaxCategory(?TaxCategoryReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
    
}