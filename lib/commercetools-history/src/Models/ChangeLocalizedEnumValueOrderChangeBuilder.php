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
 * @implements Builder<ChangeLocalizedEnumValueOrderChange>
 */
final class ChangeLocalizedEnumValueOrderChangeBuilder implements Builder
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
     * @var ?LocalizedEnumValueCollection
     */
    private $nextValue;

    /**
     * @var ?LocalizedEnumValueCollection
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changeLocalizedEnumValueOrder</code> on types and product types</p>
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
     * @return null|LocalizedEnumValueCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|LocalizedEnumValueCollection
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
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @param ?LocalizedEnumValueCollection $nextValue
     * @return $this
     */
    public function withNextValue(?LocalizedEnumValueCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?LocalizedEnumValueCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?LocalizedEnumValueCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }


    public function build(): ChangeLocalizedEnumValueOrderChange
    {
        return new ChangeLocalizedEnumValueOrderChangeModel(
            $this->change,
            $this->fieldName,
            $this->attributeName,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): ChangeLocalizedEnumValueOrderChangeBuilder
    {
        return new self();
    }
}
