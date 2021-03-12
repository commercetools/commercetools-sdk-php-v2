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
 * @implements Builder<AddLocalizedEnumValueAction>
 */
final class AddLocalizedEnumValueActionBuilder implements Builder
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
    private $attributeName;

    /**
     * @var null|LocalizedEnumValue|LocalizedEnumValueBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>addLocalizedEnumValue</code> on types</p>
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
     * <p>The name of the attribute updated.</p>
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|LocalizedEnumValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof LocalizedEnumValueBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @param ?LocalizedEnumValue $nextValue
     * @return $this
     */
    public function withNextValue(?LocalizedEnumValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?LocalizedEnumValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddLocalizedEnumValueAction
    {
        return new AddLocalizedEnumValueActionModel(
            $this->change,
            $this->fieldName,
            $this->attributeName,
            $this->nextValue instanceof LocalizedEnumValueBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddLocalizedEnumValueActionBuilder
    {
        return new self();
    }
}
