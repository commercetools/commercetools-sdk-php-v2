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
use Commercetools\History\Models\Common\AttributeLocalizedEnumValueCollection;

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

     * @var ?AttributeLocalizedEnumValueCollection
     */
    private $previousValue;

    /**

     * @var ?AttributeLocalizedEnumValueCollection
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

     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Name of the updated <a href="ctp:api:type:FieldDefinition">FieldDefinition</a>; only present on changes to Types.</p>
     *

     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * <p>Name of the updated <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>; only present on changes to Product Types.</p>
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
     * @param ?AttributeLocalizedEnumValueCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?AttributeLocalizedEnumValueCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?AttributeLocalizedEnumValueCollection $nextValue
     * @return $this
     */
    public function withNextValue(?AttributeLocalizedEnumValueCollection $nextValue)
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


    public function build(): ChangeLocalizedEnumValueOrderChange
    {
        return new ChangeLocalizedEnumValueOrderChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->fieldName,
            $this->attributeName
        );
    }

    public static function of(): ChangeLocalizedEnumValueOrderChangeBuilder
    {
        return new self();
    }
}
