<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChangeEnumValueLabelAction>
 */
final class ChangeEnumValueLabelActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $fieldName;

    /**
     * @var ?string
     */
    private $valueKey;

    /**
     * @var ?string
     */
    private $previousValue;

    /**
     * @var ?string
     */
    private $nextValue;

    /**
     * <p>Update action for <code>changeEnumValueLabel</code> on types</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>The name of the field definition updated.</p>
     *
     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * <p>Key of the values that was updated</p>
     *
     * @return null|string
     */
    public function getValueKey()
    {
        return $this->valueKey;
    }

    /**
     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @return null|string
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
     * @param ?string $fieldName
     * @return $this
     */
    public function withFieldName(?string $fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * @param ?string $valueKey
     * @return $this
     */
    public function withValueKey(?string $valueKey)
    {
        $this->valueKey = $valueKey;

        return $this;
    }

    /**
     * @param ?string $previousValue
     * @return $this
     */
    public function withPreviousValue(?string $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?string $nextValue
     * @return $this
     */
    public function withNextValue(?string $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): ChangeEnumValueLabelAction
    {
        return new ChangeEnumValueLabelActionModel(
            $this->change,
            $this->fieldName,
            $this->valueKey,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): ChangeEnumValueLabelActionBuilder
    {
        return new self();
    }
}
