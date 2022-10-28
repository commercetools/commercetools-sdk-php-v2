<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeEnumType>
 */
final class AttributeEnumTypeBuilder implements Builder
{
    /**

     * @var ?AttributePlainEnumValueCollection
     */
    private $values;

    /**
     * <p>Available values that can be assigned to Products.</p>
     *

     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param ?AttributePlainEnumValueCollection $values
     * @return $this
     */
    public function withValues(?AttributePlainEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }


    public function build(): AttributeEnumType
    {
        return new AttributeEnumTypeModel(
            $this->values
        );
    }

    public static function of(): AttributeEnumTypeBuilder
    {
        return new self();
    }
}
