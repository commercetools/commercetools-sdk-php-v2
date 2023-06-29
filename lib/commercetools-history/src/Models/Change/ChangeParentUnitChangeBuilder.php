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
use Commercetools\History\Models\Common\KeyReference;
use Commercetools\History\Models\Common\KeyReferenceBuilder;

/**
 * @implements Builder<ChangeParentUnitChange>
 */
final class ChangeParentUnitChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|KeyReference|KeyReferenceBuilder
     */
    private $previousValue;

    /**

     * @var null|KeyReference|KeyReferenceBuilder
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

     * @return null|KeyReference
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof KeyReferenceBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|KeyReference
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof KeyReferenceBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?KeyReference $previousValue
     * @return $this
     */
    public function withPreviousValue(?KeyReference $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?KeyReference $nextValue
     * @return $this
     */
    public function withNextValue(?KeyReference $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?KeyReferenceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?KeyReferenceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): ChangeParentUnitChange
    {
        return new ChangeParentUnitChangeModel(
            $this->change,
            $this->previousValue instanceof KeyReferenceBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof KeyReferenceBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): ChangeParentUnitChangeBuilder
    {
        return new self();
    }
}
