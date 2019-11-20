<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributeLocalizedEnumType>
 */
final class AttributeLocalizedEnumTypeBuilder implements Builder
{
    /**
     * @var ?AttributeLocalizedEnumValueCollection
     */
    private $values;

    /**
     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @return $this
     */
    public function withValues(?AttributeLocalizedEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }

    public function build(): AttributeLocalizedEnumType
    {
        return new AttributeLocalizedEnumTypeModel(
            $this->values
        );
    }

    public static function of(): AttributeLocalizedEnumTypeBuilder
    {
        return new self();
    }
}
