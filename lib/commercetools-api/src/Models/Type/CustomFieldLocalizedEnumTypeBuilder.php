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
 * @implements Builder<CustomFieldLocalizedEnumType>
 */
final class CustomFieldLocalizedEnumTypeBuilder implements Builder
{
    /**

     * @var ?CustomFieldLocalizedEnumValueCollection
     */
    private $values;

    /**
     * <p>Allowed values.</p>
     *

     * @return null|CustomFieldLocalizedEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param ?CustomFieldLocalizedEnumValueCollection $values
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
            $this->values
        );
    }

    public static function of(): CustomFieldLocalizedEnumTypeBuilder
    {
        return new self();
    }
}
