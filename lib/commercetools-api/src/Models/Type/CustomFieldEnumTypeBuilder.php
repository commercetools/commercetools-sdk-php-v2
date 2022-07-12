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
 * @implements Builder<CustomFieldEnumType>
 */
final class CustomFieldEnumTypeBuilder implements Builder
{
    /**

     * @var ?CustomFieldEnumValueCollection
     */
    private $values;

    /**
     * <p>Allowed values.</p>
     *

     * @return null|CustomFieldEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param ?CustomFieldEnumValueCollection $values
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
