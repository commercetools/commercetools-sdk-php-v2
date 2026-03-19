<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\CustomFields;
use Commercetools\History\Models\Common\CustomFieldsBuilder;

/**
 * @implements Builder<SetShippingCustomTypeChange>
 */
final class SetShippingCustomTypeChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $shippingKey;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $previousValue;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p><code>shippingKey</code> of the updated <a href="ctp:api:type:Shipping">Shipping</a>.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|CustomFields
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof CustomFieldsBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|CustomFields
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CustomFieldsBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?string $shippingKey
     * @return $this
     */
    public function withShippingKey(?string $shippingKey)
    {
        $this->shippingKey = $shippingKey;

        return $this;
    }

    /**
     * @param ?CustomFields $previousValue
     * @return $this
     */
    public function withPreviousValue(?CustomFields $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?CustomFields $nextValue
     * @return $this
     */
    public function withNextValue(?CustomFields $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?CustomFieldsBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?CustomFieldsBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetShippingCustomTypeChange
    {
        return new SetShippingCustomTypeChangeModel(
            $this->change,
            $this->shippingKey,
            $this->previousValue instanceof CustomFieldsBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof CustomFieldsBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetShippingCustomTypeChangeBuilder
    {
        return new self();
    }
}
