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

     * @var ?bool
     */
    private $staged;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $oldValue;

    /**
     * <p>The new value of the updated <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Whether the new value was applied to the current or the staged representation of the StandalonePrice. Staged changes are stored on the <a href="ctp:api:type:StagedStandalonePrice">StagedStandalonePrice</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>The old value of the updated <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.
     * Present on Messages created after 3 February 2023. Optional for backwards compatibility.</p>
     *

     * @return null|Money
     */
    public function getOldValue()
    {
        return $this->oldValue instanceof MoneyBuilder ? $this->oldValue->build() : $this->oldValue;
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
     * @param ?Money $oldValue
     * @return $this
     */
    public function withOldValue(?Money $oldValue)
    {
        $this->oldValue = $oldValue;

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

    /**
     * @deprecated use withOldValue() instead
     * @return $this
     */
    public function withOldValueBuilder(?MoneyBuilder $oldValue)
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    public function build(): StandalonePriceValueChangedMessagePayload
    {
        return new StandalonePriceValueChangedMessagePayloadModel(
            $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value,
            $this->staged,
            $this->oldValue instanceof MoneyBuilder ? $this->oldValue->build() : $this->oldValue
        );
    }

    public static function of(): StandalonePriceValueChangedMessagePayloadBuilder
    {
        return new self();
    }
}
