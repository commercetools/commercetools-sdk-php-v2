<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TypeAddLocalizedEnumValueAction>
 */
final class TypeAddLocalizedEnumValueActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $fieldName;

    /**
     * @var null|CustomFieldLocalizedEnumValue|CustomFieldLocalizedEnumValueBuilder
     */
    private $value;

    /**
     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @return null|CustomFieldLocalizedEnumValue
     */
    public function getValue()
    {
        return $this->value instanceof CustomFieldLocalizedEnumValueBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withFieldName(?string $fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?CustomFieldLocalizedEnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?CustomFieldLocalizedEnumValueBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): TypeAddLocalizedEnumValueAction
    {
        return new TypeAddLocalizedEnumValueActionModel(
            $this->fieldName,
            $this->value instanceof CustomFieldLocalizedEnumValueBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): TypeAddLocalizedEnumValueActionBuilder
    {
        return new self();
    }
}
