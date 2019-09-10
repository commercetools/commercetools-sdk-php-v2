<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomFieldLocalizedEnumType>
 */
final class CustomFieldLocalizedEnumTypeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?CustomFieldLocalizedEnumValueCollection
     */
    private $values;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|CustomFieldLocalizedEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValues(?CustomFieldLocalizedEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }

    public function build(): CustomFieldLocalizedEnumType
    {
        return new CustomFieldLocalizedEnumTypeModel(
            $this->name,
            $this->values
        );
    }

    public static function of(): CustomFieldLocalizedEnumTypeBuilder
    {
        return new self();
    }
}
