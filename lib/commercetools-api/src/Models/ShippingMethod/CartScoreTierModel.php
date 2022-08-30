<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartScoreTierModel extends JsonObjectModel implements CartScoreTier
{
    public const DISCRIMINATOR_VALUE = 'CartScore';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?int
     */
    protected $score;

    /**
     *
     * @var ?Money
     */
    protected $price;

    /**
     *
     * @var ?PriceFunction
     */
    protected $priceFunction;

    /**
     *
     * @var ?bool
     */
    protected $isMatching;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $score = null,
        ?Money $price = null,
        ?PriceFunction $priceFunction = null,
        ?bool $isMatching = null,
        ?string $type = null
    ) {
        $this->score = $score;
        $this->price = $price;
        $this->priceFunction = $priceFunction;
        $this->isMatching = $isMatching;
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
     * <p>Abstract value for categorizing a Cart. The range starts at <code>0</code>. The default price covers <code>0</code>, tiers start at <code>1</code>. See <a href="/../tutorials/shipping-rate">Using Tiered Shipping Rates</a> for details and examples.</p>
     *
     *
     * @return null|int
     */
    public function getScore()
    {
        if (is_null($this->score)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_SCORE);
            if (is_null($data)) {
                return null;
            }
            $this->score = (int) $data;
        }

        return $this->score;
    }

    /**
     * <p>Defines a fixed price for the <code>score</code>.</p>
     *
     *
     * @return null|Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = MoneyModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p>Dynamically calculates a Price for a range of scores.</p>
     *
     *
     * @return null|PriceFunction
     */
    public function getPriceFunction()
    {
        if (is_null($this->priceFunction)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE_FUNCTION);
            if (is_null($data)) {
                return null;
            }

            $this->priceFunction = PriceFunctionModel::of($data);
        }

        return $this->priceFunction;
    }

    /**
     * <p>Appears in response to <a href="#get-shippingmethods-for-a-cart">Get ShippingMethods for a Cart</a> if the shipping rate matches the search query.</p>
     *
     *
     * @return null|bool
     */
    public function getIsMatching()
    {
        if (is_null($this->isMatching)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_MATCHING);
            if (is_null($data)) {
                return null;
            }
            $this->isMatching = (bool) $data;
        }

        return $this->isMatching;
    }


    /**
     * @param ?int $score
     */
    public function setScore(?int $score): void
    {
        $this->score = $score;
    }

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?PriceFunction $priceFunction
     */
    public function setPriceFunction(?PriceFunction $priceFunction): void
    {
        $this->priceFunction = $priceFunction;
    }

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void
    {
        $this->isMatching = $isMatching;
    }
}
