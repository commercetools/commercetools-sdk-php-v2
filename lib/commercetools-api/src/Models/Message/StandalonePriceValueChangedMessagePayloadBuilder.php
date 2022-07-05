<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceValueChangedMessagePayload>
 */
final class StandalonePriceValueChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Money|MoneyBuilder
     */
    private $value;

    /**
     * <p>The new value of the updated StandalonePrice.</p>
     *

     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
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

    public function build(): StandalonePriceValueChangedMessagePayload
    {
        return new StandalonePriceValueChangedMessagePayloadModel(
            $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): StandalonePriceValueChangedMessagePayloadBuilder
    {
        return new self();
    }
}
