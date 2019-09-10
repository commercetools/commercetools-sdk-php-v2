<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceModel;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class ShoppingListLineItemModel extends JsonObjectModel implements ShoppingListLineItem
{
    
    public function __construct(
        DateTimeImmutable $addedAt = null,
        int $quantity = null,
        string $productId = null,
        CustomFields $custom = null,
        ProductVariant $variant = null,
        LocalizedString $name = null,
        int $variantId = null,
        string $id = null,
        DateTimeImmutable $deactivatedAt = null,
        LocalizedString $productSlug = null,
        ProductTypeReference $productType = null
    ) {
        $this->addedAt = $addedAt;
        $this->quantity = $quantity;
        $this->productId = $productId;
        $this->custom = $custom;
        $this->variant = $variant;
        $this->name = $name;
        $this->variantId = $variantId;
        $this->id = $id;
        $this->deactivatedAt = $deactivatedAt;
        $this->productSlug = $productSlug;
        $this->productType = $productType;
        
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $addedAt;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?string
     */
    protected $productId;
    
    /**
     * @var ?CustomFields
     */
    protected $custom;
    
    /**
     * @var ?ProductVariant
     */
    protected $variant;
    
    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $deactivatedAt;
    
    /**
     * @var ?LocalizedString
     */
    protected $productSlug;
    
    /**
     * @var ?ProductTypeReference
     */
    protected $productType;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getAddedAt()
    {
       if (is_null($this->addedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListLineItem::FIELD_ADDED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->addedAt = $data;
       }
       return $this->addedAt;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ShoppingListLineItem::FIELD_QUANTITY);
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
    final public function getProductId()
    {
       if (is_null($this->productId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListLineItem::FIELD_PRODUCT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->productId = (string)$data;
       }
       return $this->productId;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingListLineItem::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return ProductVariant|null
     */
    final public function getVariant()
    {
       if (is_null($this->variant)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingListLineItem::FIELD_VARIANT);
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
           $data = $this->raw(ShoppingListLineItem::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVariantId()
    {
       if (is_null($this->variantId)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ShoppingListLineItem::FIELD_VARIANT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->variantId = (int)$data;
       }
       return $this->variantId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListLineItem::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getDeactivatedAt()
    {
       if (is_null($this->deactivatedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListLineItem::FIELD_DEACTIVATED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->deactivatedAt = $data;
       }
       return $this->deactivatedAt;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getProductSlug()
    {
       if (is_null($this->productSlug)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingListLineItem::FIELD_PRODUCT_SLUG);
           if (is_null($data)) {
               return null;
           }
           
           $this->productSlug = LocalizedStringModel::of($data);
       }
       return $this->productSlug;
    }
    
    /**
     *
     * @return ProductTypeReference|null
     */
    final public function getProductType()
    {
       if (is_null($this->productType)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingListLineItem::FIELD_PRODUCT_TYPE);
           if (is_null($data)) {
               return null;
           }
           
           $this->productType = ProductTypeReferenceModel::of($data);
       }
       return $this->productType;
    }
    final public function setAddedAt(?DateTimeImmutable $addedAt): void
    {
        $this->addedAt = $addedAt;
    }
    
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }
    
    final public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setVariant(?ProductVariant $variant): void
    {
        $this->variant = $variant;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setDeactivatedAt(?DateTimeImmutable $deactivatedAt): void
    {
        $this->deactivatedAt = $deactivatedAt;
    }
    
    final public function setProductSlug(?LocalizedString $productSlug): void
    {
        $this->productSlug = $productSlug;
    }
    
    final public function setProductType(?ProductTypeReference $productType): void
    {
        $this->productType = $productType;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[ShoppingListLineItem::FIELD_ADDED_AT]) && $data[ShoppingListLineItem::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
           $data[ShoppingListLineItem::FIELD_ADDED_AT] = $data[ShoppingListLineItem::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[ShoppingListLineItem::FIELD_DEACTIVATED_AT]) && $data[ShoppingListLineItem::FIELD_DEACTIVATED_AT] instanceof \DateTimeImmutable) {
           $data[ShoppingListLineItem::FIELD_DEACTIVATED_AT] = $data[ShoppingListLineItem::FIELD_DEACTIVATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}