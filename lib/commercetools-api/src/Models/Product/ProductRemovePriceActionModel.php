<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductRemovePriceActionModel extends JsonObjectModel implements ProductRemovePriceAction
{
    public const DISCRIMINATOR_VALUE = 'removePrice';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $priceId;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?int
     */
    protected $variantId;

    /**
     *
     * @var ?PriceDraft
     */
    protected $price;

    /**
     *
     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $priceId = null,
        ?string $sku = null,
        ?int $variantId = null,
        ?PriceDraft $price = null,
        ?bool $staged = null,
        ?string $action = null
    ) {
        $this->priceId = $priceId;
        $this->sku = $sku;
        $this->variantId = $variantId;
        $this->price = $price;
        $this->staged = $staged;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>The <code>id</code> of the Embedded Price to remove.</p>
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
     * <p>The <code>sku</code> of the ProductVariant the provided Price should be removed from.
     * Either 'variantId' or 'sku' is required&quot; when <code>priceId</code> is not provided.
     * This field is now deprecated, use 'priceId' instead.</p>
     *
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>The <code>id</code> of the ProductVariant the provided Price should be removed from.
     * Either 'variantId' or 'sku' is required&quot; when <code>priceId</code> is not provided.
     * This field is now deprecated, use 'priceId' instead.</p>
     *
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
     * <p>The Price identical to the one to be removed from the ProductVariant.
     * This field is now deprecated, use 'priceId' instead.</p>
     *
     *
     * @return null|PriceDraft
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = PriceDraftModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p>If <code>true</code>, only the staged Embedded Price is removed. If <code>false</code>, both the current and staged Embedded Price are removed.</p>
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
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?PriceDraft $price
     */
    public function setPrice(?PriceDraft $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
