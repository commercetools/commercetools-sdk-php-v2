<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<NumberField>
 */
final class NumberFieldBuilder implements Builder
{
    /**
     * @var ?float
     */
    private $value;

    /**
     * @return null|float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?float $value
     * @return $this
     */
    public function withValue(?float $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): NumberField
    {
        return new NumberFieldModel(
            $this->value
        );
    }

    public static function of(): NumberFieldBuilder
    {
        return new self();
    }
}
