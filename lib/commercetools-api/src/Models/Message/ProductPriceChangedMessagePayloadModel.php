<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductPriceChangedMessagePayloadModel extends JsonObjectModel implements ProductPriceChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ProductPriceChanged';
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
     * @var ?Price
     */
    protected $oldPrice;

    /**
     *
     * @var ?Price
     */
    protected $newPrice;

    /**
     *
     * @var ?bool
     */
    protected $staged;

    /**
     *
     * @var ?Price
     */
    protected $oldStagedPrice;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $variantId = null,
        ?Price $oldPrice = null,
        ?Price $newPrice = null,
        ?bool $staged = null,
        ?Price $oldStagedPrice = null,
        ?string $type = null
    ) {
        $this->variantId = $variantId;
        $this->oldPrice = $oldPrice;
        $this->newPrice = $newPrice;
        $this->staged = $staged;
        $this->oldStagedPrice = $oldStagedPrice;
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
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which the Price was changed.</p>
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
     * <p>The current <a href="ctp:api:type:Price">Embedded Price</a> before the <a href="ctp:api:type:ProductChangePriceAction">Change Embedded Price</a> update action.</p>
     *
     *
     * @return null|Price
     */
    public function getOldPrice()
    {
        if (is_null($this->oldPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->oldPrice = PriceModel::of($data);
        }

        return $this->oldPrice;
    }

    /**
     * <p>The <a href="ctp:api:type:Price">Embedded Price</a> after the <a href="ctp:api:type:ProductChangePriceAction">Change Embedded Price</a> update action.</p>
     *
     *
     * @return null|Price
     */
    public function getNewPrice()
    {
        if (is_null($this->newPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->newPrice = PriceModel::of($data);
        }

        return $this->newPrice;
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
     * <p>The staged <a href="ctp:api:type:Price">Embedded Price</a> before the <a href="ctp:api:type:ProductChangePriceAction">Change Embedded Price</a> update action.</p>
     *
     *
     * @return null|Price
     */
    public function getOldStagedPrice()
    {
        if (is_null($this->oldStagedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_STAGED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->oldStagedPrice = PriceModel::of($data);
        }

        return $this->oldStagedPrice;
    }


    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?Price $oldPrice
     */
    public function setOldPrice(?Price $oldPrice): void
    {
        $this->oldPrice = $oldPrice;
    }

    /**
     * @param ?Price $newPrice
     */
    public function setNewPrice(?Price $newPrice): void
    {
        $this->newPrice = $newPrice;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?Price $oldStagedPrice
     */
    public function setOldStagedPrice(?Price $oldStagedPrice): void
    {
        $this->oldStagedPrice = $oldStagedPrice;
    }
}
