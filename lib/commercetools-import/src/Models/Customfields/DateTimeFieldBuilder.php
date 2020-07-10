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
use DateTimeImmutable;

/**
 * @implements Builder<DateTimeField>
 */
final class DateTimeFieldBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $value;

    /**
     * @return null|DateTimeImmutable
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?DateTimeImmutable $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): DateTimeField
    {
        return new DateTimeFieldModel(
            $this->value
        );
    }

    public static function of(): DateTimeFieldBuilder
    {
        return new self();
    }
}
