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
 * @implements Builder<ChangeEnumValueOrderChange>
 */
final class ChangeEnumValueOrderChangeBuilder implements Builder
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
     * @var ?EnumValueCollection
     */
    private $nextValue;

    /**
     * @var ?EnumValueCollection
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changeEnumValueOrder</code> on types</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>The name of the field/attribute definition updated.</p>
     *
     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @return null|EnumValueCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|EnumValueCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
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
     * @param ?EnumValueCollection $nextValue
     * @return $this
     */
    public function withNextValue(?EnumValueCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?EnumValueCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?EnumValueCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }


    public function build(): ChangeEnumValueOrderChange
    {
        return new ChangeEnumValueOrderChangeModel(
            $this->change,
            $this->fieldName,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): ChangeEnumValueOrderChangeBuilder
    {
        return new self();
    }
}
