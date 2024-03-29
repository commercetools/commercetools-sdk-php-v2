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

/**
 * @implements Builder<SetShippingRateInputChange>
 */
final class SetShippingRateInputChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?JsonObject
     */
    private $previousValue;

    /**

     * @var ?JsonObject
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
     * <p>Value before the change.</p>
     *

     * @return null|JsonObject
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|JsonObject
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?JsonObject $previousValue
     * @return $this
     */
    public function withPreviousValue(?JsonObject $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?JsonObject $nextValue
     * @return $this
     */
    public function withNextValue(?JsonObject $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetShippingRateInputChange
    {
        return new SetShippingRateInputChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetShippingRateInputChangeBuilder
    {
        return new self();
    }
}
