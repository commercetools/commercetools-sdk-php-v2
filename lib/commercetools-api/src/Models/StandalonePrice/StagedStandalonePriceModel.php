<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedStandalonePriceModel extends JsonObjectModel implements StagedStandalonePrice
{
    /**
     *
     * @var ?TypedMoney
     */
    protected $value;

    /**
     *
     * @var ?DiscountedPrice
     */
    protected $discounted;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypedMoney $value = null,
        ?DiscountedPrice $discounted = null
    ) {
        $this->value = $value;
        $this->discounted = $discounted;
    }

    /**
     * <p>Money value of the StagedStandalonePrice.</p>
     *
     *
     * @return null|TypedMoney
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    /**
     * <p>Discounted price for the StagedStandalonePrice.</p>
     *
     *
     * @return null|DiscountedPrice
     */
    public function getDiscounted()
    {
        if (is_null($this->discounted)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED);
            if (is_null($data)) {
                return null;
            }

            $this->discounted = DiscountedPriceModel::of($data);
        }

        return $this->discounted;
    }


    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void
    {
        $this->discounted = $discounted;
    }
}
