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
use DateTimeImmutable;
use stdClass;

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
     * <p>A date with time in the format <code>YYYY-MM-DDTHH:mm:ss.SSSZ</code>.
     * The time zone is optional and defaults to UTC if not specified.
     * If the time zone is specified, it must be in the format <code>±HH:mm</code> or <code>Z</code> for UTC.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?DateTimeImmutable $value
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
