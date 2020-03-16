<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use DateTimeImmutableModel;
use stdClass;

/**
 * @internal
 */
final class ShoppingListAddLineItemActionModel extends JsonObjectModel implements ShoppingListAddLineItemAction
{
    public const DISCRIMINATOR_VALUE = 'addLineItem';
    /**
     * @var ?string
     */
    protected $action;

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
    protected $variantId;

    /**
     * @var ?int
     */
    protected $quantity;

    /**
     * @var ?DateTimeImmutable
     */
    protected $addedAt;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    public function __construct(
        string $sku = null,
        string $productId = null,
        int $variantId = null,
        int $quantity = null,
        DateTimeImmutable $addedAt = null,
        CustomFieldsDraft $custom = null
    ) {
        $this->sku = $sku;
        $this->productId = $productId;
        $this->variantId = $variantId;
        $this->quantity = $quantity;
        $this->addedAt = $addedAt;
        $this->custom = $custom;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListAddLineItemAction::FIELD_SKU);
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
            $data = $this->raw(ShoppingListAddLineItemAction::FIELD_PRODUCT_ID);
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
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ShoppingListAddLineItemAction::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ShoppingListAddLineItemAction::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getAddedAt()
    {
        if (is_null($this->addedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListAddLineItemAction::FIELD_ADDED_AT);
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
            $data = $this->raw(ShoppingListAddLineItemAction::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setAddedAt(?DateTimeImmutable $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ShoppingListAddLineItemAction::FIELD_ADDED_AT]) && $data[ShoppingListAddLineItemAction::FIELD_ADDED_AT] instanceof \DateTimeImmutable) {
            $data[ShoppingListAddLineItemAction::FIELD_ADDED_AT] = $data[ShoppingListAddLineItemAction::FIELD_ADDED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
