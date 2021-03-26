<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class LineItemModel extends JsonObjectModel implements LineItem
{

    /**
     * @var ?string
     */
    protected $addedAt;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $productId;

    /**
     * @var ?LocalizedString
     */
    protected $productSlug;

    /**
     * @var ?Reference
     */
    protected $productType;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?Variant
     */
    protected $variant;

    /**
     * @var ?int
     */
    protected $variantId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $addedAt = null,
        ?CustomFields $custom = null,
        ?string $id = null,
        ?LocalizedString $name = null,
        ?string $productId = null,
        ?LocalizedString $productSlug = null,
        ?Reference $productType = null,
        ?int $quantity = null,
        ?Variant $variant = null,
        ?int $variantId = null
    ) {
        $this->addedAt = $addedAt;
        $this->custom = $custom;
        $this->id = $id;
        $this->name = $name;
        $this->productId = $productId;
        $this->productSlug = $productSlug;
        $this->productType = $productType;
        $this->quantity = $quantity;
        $this->variant = $variant;
        $this->variantId = $variantId;

    }

    /**
     * @return null|string
     */
    public function getAddedAt()
    {
        if (is_null($this->addedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDED_AT);
            if (is_null($data)) {
                return null;
            }
            $this->addedAt =  (string) $data;
        }

        return $this->addedAt;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom =  CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id =  (string) $data;
        }

        return $this->id;
    }

    /**
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

            $this->name =  LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId =  (string) $data;
        }

        return $this->productId;
    }

    /**
     * @return null|LocalizedString
     */
    public function getProductSlug()
    {
        if (is_null($this->productSlug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->productSlug =  LocalizedStringModel::of($data);
        }

        return $this->productSlug;
    }

    /**
     * @return null|Reference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->productType =  ReferenceModel::of($data);
        }

        return $this->productType;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity =  (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|Variant
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->variant =  VariantModel::of($data);
        }

        return $this->variant;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId =  (int) $data;
        }

        return $this->variantId;
    }


    /**
     * @param ?string $addedAt
     */
    public function setAddedAt(?string $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $productId
     */
    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @param ?LocalizedString $productSlug
     */
    public function setProductSlug(?LocalizedString $productSlug): void
    {
        $this->productSlug = $productSlug;
    }

    /**
     * @param ?Reference $productType
     */
    public function setProductType(?Reference $productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?Variant $variant
     */
    public function setVariant(?Variant $variant): void
    {
        $this->variant = $variant;
    }

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }



}
