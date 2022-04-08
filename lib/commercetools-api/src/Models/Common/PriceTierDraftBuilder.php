<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PriceTierDraft>
 */
final class PriceTierDraftBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $minimumQuantity;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $value;

    /**
     * @return null|int
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.
     * For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @param ?int $minimumQuantity
     * @return $this
     */
    public function withMinimumQuantity(?int $minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }

    /**
     * @param ?Money $value
     * @return $this
     */
    public function withValue(?Money $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): PriceTierDraft
    {
        return new PriceTierDraftModel(
            $this->minimumQuantity,
            $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): PriceTierDraftBuilder
    {
        return new self();
    }
}
