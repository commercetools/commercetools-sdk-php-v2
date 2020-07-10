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
 * @implements Builder<StringSetField>
 */
final class StringSetFieldBuilder implements Builder
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


    public function build(): StringSetField
    {
        return new StringSetFieldModel(
            $this->value
        );
    }

    public static function of(): StringSetFieldBuilder
    {
        return new self();
    }
}
