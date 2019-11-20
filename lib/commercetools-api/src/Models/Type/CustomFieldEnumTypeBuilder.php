<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomFieldEnumType>
 */
final class CustomFieldEnumTypeBuilder implements Builder
{
    /**
     * @var ?CustomFieldEnumValueCollection
     */
    private $values;

    /**
     * @return null|CustomFieldEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @return $this
     */
    public function withValues(?CustomFieldEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }

    public function build(): CustomFieldEnumType
    {
        return new CustomFieldEnumTypeModel(
            $this->values
        );
    }

    public static function of(): CustomFieldEnumTypeBuilder
    {
        return new self();
    }
}
