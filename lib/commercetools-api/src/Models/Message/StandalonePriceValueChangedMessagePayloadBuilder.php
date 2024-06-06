<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
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

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $value;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $oldValue;

    /**
     * <p>The new value of the updated <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue()
    {
        return $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value;
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

     * @return null|TypedMoney
     */
    public function getOldValue()
    {
        return $this->oldValue instanceof TypedMoneyBuilder ? $this->oldValue->build() : $this->oldValue;
    }

    /**
     * @param ?TypedMoney $value
     * @return $this
     */
    public function withValue(?TypedMoney $value)
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
     * @param ?TypedMoney $oldValue
     * @return $this
     */
    public function withOldValue(?TypedMoney $oldValue)
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?TypedMoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withOldValue() instead
     * @return $this
     */
    public function withOldValueBuilder(?TypedMoneyBuilder $oldValue)
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    public function build(): StandalonePriceValueChangedMessagePayload
    {
        return new StandalonePriceValueChangedMessagePayloadModel(
            $this->value instanceof TypedMoneyBuilder ? $this->value->build() : $this->value,
            $this->staged,
            $this->oldValue instanceof TypedMoneyBuilder ? $this->oldValue->build() : $this->oldValue
        );
    }

    public static function of(): StandalonePriceValueChangedMessagePayloadBuilder
    {
        return new self();
    }
}
