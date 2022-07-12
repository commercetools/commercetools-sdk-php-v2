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
 * @implements Builder<TimeField>
 */
final class TimeFieldBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $value;

    /**

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


    public function build(): TimeField
    {
        return new TimeFieldModel(
            $this->value
        );
    }

    public static function of(): TimeFieldBuilder
    {
        return new self();
    }
}
