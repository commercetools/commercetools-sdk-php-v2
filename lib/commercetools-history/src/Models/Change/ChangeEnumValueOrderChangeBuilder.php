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
use Commercetools\History\Models\Common\CustomFieldEnumValueCollection;

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

     * @var ?CustomFieldEnumValueCollection
     */
    private $previousValue;

    /**

     * @var ?CustomFieldEnumValueCollection
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
     * <p>Value before the change.</p>
     *

     * @return null|CustomFieldEnumValueCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|CustomFieldEnumValueCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?CustomFieldEnumValueCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?CustomFieldEnumValueCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?CustomFieldEnumValueCollection $nextValue
     * @return $this
     */
    public function withNextValue(?CustomFieldEnumValueCollection $nextValue)
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


    public function build(): ChangeEnumValueOrderChange
    {
        return new ChangeEnumValueOrderChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->fieldName,
            $this->attributeName
        );
    }

    public static function of(): ChangeEnumValueOrderChangeBuilder
    {
        return new self();
    }
}
