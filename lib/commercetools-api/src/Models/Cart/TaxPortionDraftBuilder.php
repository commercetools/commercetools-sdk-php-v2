<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TaxPortionDraft>
 */
final class TaxPortionDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?float
     */
    private $rate;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $amount;

    /**
     * <p>Name of the tax portion.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>A number in the range 0-1.</p>
     *

     * @return null|float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * <p>Money value for the tax portion.</p>
     *

     * @return null|Money
     */
    public function getAmount()
    {
        return $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?float $rate
     * @return $this
     */
    public function withRate(?float $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @param ?Money $amount
     * @return $this
     */
    public function withAmount(?Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @deprecated use withAmount() instead
     * @return $this
     */
    public function withAmountBuilder(?MoneyBuilder $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function build(): TaxPortionDraft
    {
        return new TaxPortionDraftModel(
            $this->name,
            $this->rate,
            $this->amount instanceof MoneyBuilder ? $this->amount->build() : $this->amount
        );
    }

    public static function of(): TaxPortionDraftBuilder
    {
        return new self();
    }
}
