<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class ShoppingListLineItemDraftModel extends JsonObjectModel implements ShoppingListLineItemDraft
{
    /**
     * @var ?DateTimeImmutable
     */
    protected $addedAt;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?string
     */
    protected $productId;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?int
     */
    protected $variantId;

    public function __construct(
        DateTimeImmutable $addedAt = null,
        CustomFieldsDraft $custom = null,
        string $sku = null,
        string $productId = null,
        int $quantity = null,
        int $variantId = null
    ) {
        $this->addedAt = $addedAt;
        $this->custom = $custom;
        $this->sku = $sku;
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->variantId = $variantId;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getAddedAt()
    {
        if (is_null($this->addedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListLineItemDraft::FIELD_ADDED_AT);
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
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShoppingListLineItemDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListLineItemDraft::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * @return null|string
     */
    public function getProductId()
    {
        if (is_null($this->productId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListLineItemDraft::FIELD_PRODUCT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->productId = (string) $data;
        }

        return $this->productId;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ShoppingListLineItemDraft::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ShoppingListLineItemDraft::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    public function setAddedAt(?DateTimeImmutable $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ShoppingListLineItemDraft::FIELD_ADDED_AT]) && $data[ShoppingListLineItemDraft::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
            $data[ShoppingListLineItemDraft::FIELD_ADDED_AT] = $data[ShoppingListLineItemDraft::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
