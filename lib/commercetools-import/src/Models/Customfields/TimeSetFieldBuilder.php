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
 * @implements Builder<TimeSetField>
 */
final class TimeSetFieldBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutableCollection
     */
    private $value;

    /**
     * <p>JSON array of time values in the format <code>HH:mm:ss.SSS</code>.
     * The time zone is optional and defaults to UTC if not specified.
     * If the time zone is specified, it must be in the format <code>±HH:mm</code> or <code>Z</code> for UTC.
     * The order of items in the array is not fixed.</p>
     *

     * @return null|DateTimeImmutableCollection
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?DateTimeImmutableCollection $value
     * @return $this
     */
    public function withValue(?DateTimeImmutableCollection $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): TimeSetField
    {
        return new TimeSetFieldModel(
            $this->value
        );
    }

    public static function of(): TimeSetFieldBuilder
    {
        return new self();
    }
}
