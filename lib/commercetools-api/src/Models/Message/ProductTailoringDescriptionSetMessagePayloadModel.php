<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
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
final class ProductTailoringDescriptionSetMessagePayloadModel extends JsonObjectModel implements ProductTailoringDescriptionSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductTailoringDescriptionSet';
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
     * @var ?LocalizedString
     */
    protected $description;

    /**
     *
     * @var ?LocalizedString
     */
    protected $oldDescription;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StoreKeyReference $store = null,
        ?string $productKey = null,
        ?ProductReference $product = null,
        ?LocalizedString $description = null,
        ?LocalizedString $oldDescription = null,
        ?string $type = null
    ) {
        $this->store = $store;
        $this->productKey = $productKey;
        $this->product = $product;
        $this->description = $description;
        $this->oldDescription = $oldDescription;
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
     * <p>The description of the <a href="ctp:api:type:ProductTailoring">Product Tailoring</a> after the <a href="ctp:api:type:ProductTailoringSetDescriptionAction">Set Description</a> update action.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>The description of the <a href="ctp:api:type:ProductTailoring">ProductTailoring</a> before the <a href="ctp:api:type:ProductTailoringSetDescriptionAction">Set Description</a> update action.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getOldDescription()
    {
        if (is_null($this->oldDescription)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->oldDescription = LocalizedStringModel::of($data);
        }

        return $this->oldDescription;
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
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?LocalizedString $oldDescription
     */
    public function setOldDescription(?LocalizedString $oldDescription): void
    {
        $this->oldDescription = $oldDescription;
    }
}
