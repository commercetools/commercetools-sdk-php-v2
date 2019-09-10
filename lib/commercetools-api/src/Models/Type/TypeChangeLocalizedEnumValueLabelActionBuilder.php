<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypeChangeLocalizedEnumValueLabelAction>
 */
final class TypeChangeLocalizedEnumValueLabelActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $fieldName;

    /**
     * @var CustomFieldLocalizedEnumValue|?CustomFieldLocalizedEnumValueBuilder
     */
    private $value;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

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
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
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

    public function build(): TypeChangeLocalizedEnumValueLabelAction
    {
        return new TypeChangeLocalizedEnumValueLabelActionModel(
            $this->action,
            $this->fieldName,
            ($this->value instanceof CustomFieldLocalizedEnumValueBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): TypeChangeLocalizedEnumValueLabelActionBuilder
    {
        return new self();
    }
}
