<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Pricemapping;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class PriceMappingModel extends JsonObjectModel implements PriceMapping
{
    /**
     * @var ?JsonObject
     */
    protected $productVariant;

    /**
     * @var ?string
     */
    protected $priceId;

    /**
     * @var ?string
     */
    protected $priceKey;

    public function __construct(
        JsonObject $productVariant = null,
        string $priceId = null,
        string $priceKey = null
    ) {
        $this->productVariant = $productVariant;
        $this->priceId = $priceId;
        $this->priceKey = $priceKey;
    }

    /**
     * <p>the variant where the price is included</p>.
     *
     * @return null|JsonObject
     */
    public function getProductVariant()
    {
        if (is_null($this->productVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceMapping::FIELD_PRODUCT_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->productVariant = JsonObjectModel::of($data);
        }

        return $this->productVariant;
    }

    /**
     * <p>The ctp-id of the price.</p>.
     *
     * @return null|string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceMapping::FIELD_PRICE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->priceId = (string) $data;
        }

        return $this->priceId;
    }

    /**
     * <p>The key of the imported price.</p>.
     *
     * @return null|string
     */
    public function getPriceKey()
    {
        if (is_null($this->priceKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PriceMapping::FIELD_PRICE_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->priceKey = (string) $data;
        }

        return $this->priceKey;
    }

    public function setProductVariant(?JsonObject $productVariant): void
    {
        $this->productVariant = $productVariant;
    }

    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }

    public function setPriceKey(?string $priceKey): void
    {
        $this->priceKey = $priceKey;
    }
}
