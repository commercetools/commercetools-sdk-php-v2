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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<SetInputTipChange>
 */
final class SetInputTipChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $nextValue;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setInputTip</code> on product types</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>The name of the updated attribute.</p>
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|LocalizedString
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof LocalizedStringBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|LocalizedString
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof LocalizedStringBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @param ?LocalizedString $nextValue
     * @return $this
     */
    public function withNextValue(?LocalizedString $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?LocalizedString $previousValue
     * @return $this
     */
    public function withPreviousValue(?LocalizedString $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?LocalizedStringBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?LocalizedStringBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetInputTipChange
    {
        return new SetInputTipChangeModel(
            $this->change,
            $this->attributeName,
            $this->nextValue instanceof LocalizedStringBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof LocalizedStringBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetInputTipChangeBuilder
    {
        return new self();
    }
}
