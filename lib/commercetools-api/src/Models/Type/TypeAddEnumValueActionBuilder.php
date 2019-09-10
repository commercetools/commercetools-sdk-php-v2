<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypeAddEnumValueAction>
 */
final class TypeAddEnumValueActionBuilder implements Builder
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
     * @var CustomFieldEnumValue|?CustomFieldEnumValueBuilder
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
     * @return null|CustomFieldEnumValue
     */
    public function getValue()
    {
        return $this->value instanceof CustomFieldEnumValueBuilder ? $this->value->build() : $this->value;
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
    public function withValue(?CustomFieldEnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?CustomFieldEnumValueBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): TypeAddEnumValueAction
    {
        return new TypeAddEnumValueActionModel(
            $this->action,
            $this->fieldName,
            ($this->value instanceof CustomFieldEnumValueBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): TypeAddEnumValueActionBuilder
    {
        return new self();
    }
}
