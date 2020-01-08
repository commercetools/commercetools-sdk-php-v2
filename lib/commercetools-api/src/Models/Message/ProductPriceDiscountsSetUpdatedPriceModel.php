<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductPriceDiscountsSetUpdatedPriceModel extends JsonObjectModel implements ProductPriceDiscountsSetUpdatedPrice
{
    /**
     * @var ?int
     */
    protected $variantId;

    /**
     * @var ?string
     */
    protected $variantKey;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?string
     */
    protected $priceId;

    /**
     * @var ?DiscountedPrice
     */
    protected $discounted;

    /**
     * @var ?bool
     */
    protected $staged;

    public function __construct(
        int $variantId = null,
        string $variantKey = null,
        string $sku = null,
        string $priceId = null,
        DiscountedPrice $discounted = null,
        bool $staged = null
    ) {
        $this->variantId = $variantId;
        $this->variantKey = $variantKey;
        $this->sku = $sku;
        $this->priceId = $priceId;
        $this->discounted = $discounted;
        $this->staged = $staged;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProductPriceDiscountsSetUpdatedPrice::FIELD_VARIANT_ID);
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
    public function getVariantKey()
    {
        if (is_null($this->variantKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductPriceDiscountsSetUpdatedPrice::FIELD_VARIANT_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->variantKey = (string) $data;
        }

        return $this->variantKey;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductPriceDiscountsSetUpdatedPrice::FIELD_SKU);
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
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductPriceDiscountsSetUpdatedPrice::FIELD_PRICE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->priceId = (string) $data;
        }

        return $this->priceId;
    }

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        if (is_null($this->discounted)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductPriceDiscountsSetUpdatedPrice::FIELD_DISCOUNTED);
            if (is_null($data)) {
                return null;
            }

            $this->discounted = DiscountedPriceModel::of($data);
        }

        return $this->discounted;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductPriceDiscountsSetUpdatedPrice::FIELD_STAGED);
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

    public function setVariantKey(?string $variantKey): void
    {
        $this->variantKey = $variantKey;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }

    public function setDiscounted(?DiscountedPrice $discounted): void
    {
        $this->discounted = $discounted;
    }

    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
