<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductPriceKeySetMessagePayloadModel extends JsonObjectModel implements ProductPriceKeySetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductPriceKeySet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $variantId;

    /**
     *
     * @var ?string
     */
    protected $priceId;

    /**
     *
     * @var ?string
     */
    protected $oldKey;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $variantId = null,
        ?string $priceId = null,
        ?string $oldKey = null,
        ?string $key = null,
        ?bool $staged = null,
        ?string $type = null
    ) {
        $this->variantId = $variantId;
        $this->priceId = $priceId;
        $this->oldKey = $oldKey;
        $this->key = $key;
        $this->staged = $staged;
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
     *
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
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Price">Embedded Price</a>.</p>
     *
     *
     * @return null|string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->priceId = (string) $data;
        }

        return $this->priceId;
    }

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:Price">Embedded Price</a> before the <a href="ctp:api:type:ProductSetPriceKeyAction">Set Price Key</a> update action.</p>
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
     * <p><code>key</code> value of the <a href="ctp:api:type:Price">Embedded Price</a> after the <a href="ctp:api:type:ProductSetPriceKeyAction">Set Price Key</a> update action.</p>
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
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }


    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }

    /**
     * @param ?string $oldKey
     */
    public function setOldKey(?string $oldKey): void
    {
        $this->oldKey = $oldKey;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
