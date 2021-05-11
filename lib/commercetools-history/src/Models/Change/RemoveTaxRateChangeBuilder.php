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
use Commercetools\History\Models\Common\TaxRate;
use Commercetools\History\Models\Common\TaxRateBuilder;

/**
 * @implements Builder<RemoveTaxRateChange>
 */
final class RemoveTaxRateChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|TaxRate|TaxRateBuilder
     */
    private $previousValue;

    /**
     * @var null|TaxRate|TaxRateBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>removeTaxRate</code> on tax categories</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Shape of the value for <code>addTaxRate</code> and <code>removeTaxRate</code> actions</p>
     *
     * @return null|TaxRate
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof TaxRateBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Shape of the value for <code>addTaxRate</code> and <code>removeTaxRate</code> actions</p>
     *
     * @return null|TaxRate
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof TaxRateBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?TaxRate $previousValue
     * @return $this
     */
    public function withPreviousValue(?TaxRate $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?TaxRate $nextValue
     * @return $this
     */
    public function withNextValue(?TaxRate $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?TaxRateBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?TaxRateBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): RemoveTaxRateChange
    {
        return new RemoveTaxRateChangeModel(
            $this->change,
            $this->previousValue instanceof TaxRateBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof TaxRateBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): RemoveTaxRateChangeBuilder
    {
        return new self();
    }
}
