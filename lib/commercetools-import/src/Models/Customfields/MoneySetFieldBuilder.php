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
use Models\Common\MoneyCollection;

/**
 * @implements Builder<MoneySetField>
 */
final class MoneySetFieldBuilder implements Builder
{
    /**
     * @var ?MoneyCollection
     */
    private $value;

    /**
     * @return null|MoneyCollection
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return $this
     */
    public function withValue(?MoneyCollection $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): MoneySetField
    {
        return new MoneySetFieldModel(
            $this->value
        );
    }

    public static function of(): MoneySetFieldBuilder
    {
        return new self();
    }
}
