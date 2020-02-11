<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

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
     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
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
