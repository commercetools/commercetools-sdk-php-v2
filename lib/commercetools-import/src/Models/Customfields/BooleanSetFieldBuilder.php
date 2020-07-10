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
 * @implements Builder<BooleanSetField>
 */
final class BooleanSetFieldBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $value;

    /**
     * @return null|array
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?array $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): BooleanSetField
    {
        return new BooleanSetFieldModel(
            $this->value
        );
    }

    public static function of(): BooleanSetFieldBuilder
    {
        return new self();
    }
}
