<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantKeySetMessagePayloadModel extends JsonObjectModel implements VariantKeySetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'VariantKeySet';
    /**
     *
     * @var ?string
     */
    protected $type;

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
        ?ProductReference $product = null,
        ?string $key = null,
        ?string $oldKey = null,
        ?string $type = null
    ) {
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
     * <p>Reference to the Product containing the Variant.</p>
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
     * <p>The key that was set on the Variant.</p>
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
     * <p>The previous key of the Variant.</p>
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
