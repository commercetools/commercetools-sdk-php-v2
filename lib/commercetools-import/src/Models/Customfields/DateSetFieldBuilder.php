<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DateSetField>
 */
final class DateSetFieldBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutableCollection
     */
    private $value;

    /**
     * @return null|DateTimeImmutableCollection
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?DateTimeImmutableCollection $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): DateSetField
    {
        return new DateSetFieldModel(
            $this->value
        );
    }

    public static function of(): DateSetFieldBuilder
    {
        return new self();
    }
}
