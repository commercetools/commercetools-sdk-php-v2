<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
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
