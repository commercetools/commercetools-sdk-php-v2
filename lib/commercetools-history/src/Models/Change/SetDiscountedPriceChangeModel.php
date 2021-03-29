<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Price;
use Commercetools\History\Models\Common\PriceModel;

/**
 * @internal
 */
final class SetDiscountedPriceChangeModel extends JsonObjectModel implements SetDiscountedPriceChange
{
    public const DISCRIMINATOR_VALUE = 'SetDiscountedPriceChange';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?string
     */
    protected $catalogData;

    /**
     * @var ?string
     */
    protected $variant;

    /**
     * @var ?string
     */
    protected $priceId;

    /**
     * @var ?Price
     */
    protected $previousValue;

    /**
     * @var ?Price
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $catalogData = null,
        ?string $variant = null,
        ?string $priceId = null,
        ?Price $previousValue = null,
        ?Price $nextValue = null
    ) {
        $this->change = $change;
        $this->catalogData = $catalogData;
        $this->variant = $variant;
        $this->priceId = $priceId;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>setDiscountedPrice</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getCatalogData()
    {
        if (is_null($this->catalogData)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CATALOG_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->catalogData =  (string) $data;
        }

        return $this->catalogData;
    }

    /**
     * @return null|string
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->variant =  (string) $data;
        }

        return $this->variant;
    }

    /**
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
            $this->priceId =  (string) $data;
        }

        return $this->priceId;
    }

    /**
     * @return null|Price
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue =  PriceModel::of($data);
        }

        return $this->previousValue;
    }

    /**
     * @return null|Price
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  PriceModel::of($data);
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void
    {
        $this->catalogData = $catalogData;
    }

    /**
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void
    {
        $this->variant = $variant;
    }

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }

    /**
     * @param ?Price $previousValue
     */
    public function setPreviousValue(?Price $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?Price $nextValue
     */
    public function setNextValue(?Price $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
