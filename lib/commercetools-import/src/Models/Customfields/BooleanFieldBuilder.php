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
 * @implements Builder<BooleanField>
 */
final class BooleanFieldBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $value;

    /**
     * @return null|bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?bool $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): BooleanField
    {
        return new BooleanFieldModel(
            $this->value
        );
    }

    public static function of(): BooleanFieldBuilder
    {
        return new self();
    }
}
