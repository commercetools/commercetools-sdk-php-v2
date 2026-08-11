<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductTailoringKeySetMessagePayloadModel extends JsonObjectModel implements ProductTailoringKeySetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductTailoringKeySet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?StoreKeyReference
     */
    protected $store;

    /**
     *
     * @var ?string
     */
    protected $productKey;

    /**
     *
     * @var ?ProductReference
     */
    protected $product;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $oldKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StoreKeyReference $store = null,
        ?string $productKey = null,
        ?ProductReference $product = null,
        ?string $key = null,
        ?string $oldKey = null,
        ?string $type = null
    ) {
        $this->store = $store;
        $this->productKey = $productKey;
        $this->product = $product;
        $this->key = $key;
        $this->oldKey = $oldKey;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The Store to which the Product Tailoring belongs.</p>
     *
     *
     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreKeyReferenceModel::of($data);
        }

        return $this->store;
    }

    /**
     * <p>User-defined unique identifier of the Product this Product Tailoring belongs to.</p>
     *
     *
     * @return null|string
     */
    public function getProductKey()
    {
        if (is_null($this->productKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRODUCT_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->productKey = (string) $data;
        }

        return $this->productKey;
    }

    /**
     * <p>Reference to the Product the Product Tailoring belongs to.</p>
     *
     *
     * @return null|ProductReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:ProductTailoring">ProductTailoring</a> after the <a href="ctp:api:type:ProductTailoringSetKeyAction">Set Key</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:ProductTailoring">ProductTailoring</a> before the <a href="ctp:api:type:ProductTailoringSetKeyAction">Set Key</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldKey()
    {
        if (is_null($this->oldKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->oldKey = (string) $data;
        }

        return $this->oldKey;
    }


    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void
    {
        $this->store = $store;
    }

    /**
     * @param ?string $productKey
     */
    public function setProductKey(?string $productKey): void
    {
        $this->productKey = $productKey;
    }

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $oldKey
     */
    public function setOldKey(?string $oldKey): void
    {
        $this->oldKey = $oldKey;
    }
}
