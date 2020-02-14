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
