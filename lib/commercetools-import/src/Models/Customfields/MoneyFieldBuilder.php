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
use Models\Common\Money;
use Models\Common\MoneyBuilder;

/**
 * @implements Builder<MoneyField>
 */
final class MoneyFieldBuilder implements Builder
{
    /**
     * @var null|Money|MoneyBuilder
     */
    private $value;

    /**
     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?Money $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): MoneyField
    {
        return new MoneyFieldModel(
            $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): MoneyFieldBuilder
    {
        return new self();
    }
}
