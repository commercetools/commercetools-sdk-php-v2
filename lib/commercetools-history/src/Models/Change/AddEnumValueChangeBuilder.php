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
use Commercetools\History\Models\Common\CustomFieldEnumValue;
use Commercetools\History\Models\Common\CustomFieldEnumValueBuilder;

/**
 * @implements Builder<AddEnumValueChange>
 */
final class AddEnumValueChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|CustomFieldEnumValue|CustomFieldEnumValueBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $fieldName;

    /**

     * @var ?string
     */
    private $attributeName;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|CustomFieldEnumValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof CustomFieldEnumValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Name of the updated <a href="ctp:api:type:FieldDefinition">FieldDefinition</a>.</p>
     *

     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * <p>Name of the updated <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
     *

     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
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
     * @param ?CustomFieldEnumValue $nextValue
     * @return $this
     */
    public function withNextValue(?CustomFieldEnumValue $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?CustomFieldEnumValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddEnumValueChange
    {
        return new AddEnumValueChangeModel(
            $this->change,
            $this->nextValue instanceof CustomFieldEnumValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->fieldName,
            $this->attributeName
        );
    }

    public static function of(): AddEnumValueChangeBuilder
    {
        return new self();
    }
}
