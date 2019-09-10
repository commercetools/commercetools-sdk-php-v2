<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantModel;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class ShoppingListLineItemModel extends JsonObjectModel implements ShoppingListLineItem
{
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
     * @return null|DateTimeImmutable
     */
    public function getAddedAt()
    {
        if (is_null($this->addedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListLineItem::FIELD_ADDED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->addedAt = $data;
        }

        return $this->addedAt;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ShoppingListLineItem::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListLineItem::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId = (string) $data;
        }

        return $this->productId;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
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
     * @return null|ProductVariant
     */
    public function getVariant()
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
     * @return null|LocalizedString
     */
    public function getName()
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
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ShoppingListLineItem::FIELD_VARIANT_ID);
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
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListLineItem::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getDeactivatedAt()
    {
        if (is_null($this->deactivatedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListLineItem::FIELD_DEACTIVATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->deactivatedAt = $data;
        }

        return $this->deactivatedAt;
    }

    /**
     * @return null|LocalizedString
     */
    public function getProductSlug()
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
     * @return null|ProductTypeReference
     */
    public function getProductType()
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

    public function setAddedAt(?DateTimeImmutable $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    public function setVariant(?ProductVariant $variant): void
    {
        $this->variant = $variant;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setDeactivatedAt(?DateTimeImmutable $deactivatedAt): void
    {
        $this->deactivatedAt = $deactivatedAt;
    }

    public function setProductSlug(?LocalizedString $productSlug): void
    {
        $this->productSlug = $productSlug;
    }

    public function setProductType(?ProductTypeReference $productType): void
    {
        $this->productType = $productType;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ShoppingListLineItem::FIELD_ADDED_AT]) && $data[ShoppingListLineItem::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
            $data[ShoppingListLineItem::FIELD_ADDED_AT] = $data[ShoppingListLineItem::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ShoppingListLineItem::FIELD_DEACTIVATED_AT]) && $data[ShoppingListLineItem::FIELD_DEACTIVATED_AT] instanceof \DateTimeImmutable) {
            $data[ShoppingListLineItem::FIELD_DEACTIVATED_AT] = $data[ShoppingListLineItem::FIELD_DEACTIVATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
