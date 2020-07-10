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
 * @implements Builder<LocalizedEnumField>
 */
final class LocalizedEnumFieldBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $value;

    /**
     * @return null|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?string $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): LocalizedEnumField
    {
        return new LocalizedEnumFieldModel(
            $this->value
        );
    }

    public static function of(): LocalizedEnumFieldBuilder
    {
        return new self();
    }
}
