<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceChangeValueAction>
 */
final class StandalonePriceChangeValueActionBuilder implements Builder
{
    /**

     * @var null|Money|MoneyBuilder
     */
    private $value;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>If set to <code>true</code> the update action applies to the <a href="ctp:api:type:StagedStandalonePrice">StagedStandalonePrice</a>. If set to <code>false</code>, the update action applies to the current <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
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
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

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

    public function build(): StandalonePriceChangeValueAction
    {
        return new StandalonePriceChangeValueActionModel(
            $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value,
            $this->staged
        );
    }

    public static function of(): StandalonePriceChangeValueActionBuilder
    {
        return new self();
    }
}
