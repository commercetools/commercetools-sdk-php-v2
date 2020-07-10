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
 * @implements Builder<DateTimeSetField>
 */
final class DateTimeSetFieldBuilder implements Builder
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


    public function build(): DateTimeSetField
    {
        return new DateTimeSetFieldModel(
            $this->value
        );
    }

    public static function of(): DateTimeSetFieldBuilder
    {
        return new self();
    }
}
