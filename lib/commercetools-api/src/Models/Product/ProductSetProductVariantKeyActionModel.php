<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;

final class ProductSetProductVariantKeyActionModel extends JsonObjectModel implements ProductSetProductVariantKeyAction
{
    const DISCRIMINATOR_VALUE = 'setProductVariantKey';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $variantId;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?bool
     */
    protected $staged;

    public function __construct(
        int $variantId = null,
        string $sku = null,
        string $key = null,
        bool $staged = null
    ) {
        $this->variantId = $variantId;
        $this->sku = $sku;
        $this->key = $key;
        $this->staged = $staged;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductSetProductVariantKeyAction::FIELD_VARIANT_ID);
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
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductSetProductVariantKeyAction::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>If left blank or set to <code>null</code>, the key is unset/removed.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductSetProductVariantKeyAction::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductSetProductVariantKeyAction::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
