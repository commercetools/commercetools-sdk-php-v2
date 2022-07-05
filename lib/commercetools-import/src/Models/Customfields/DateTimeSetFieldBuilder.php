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
 * @implements Builder<DateTimeSetField>
 */
final class DateTimeSetFieldBuilder implements Builder
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
     * @param ?DateTimeImmutableCollection $value
     * @return $this
     */
    public function withValue(?DateTimeImmutableCollection $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): DateTimeSetField
    {
        return new DateTimeSetFieldModel(
            $this->value
        );
    }

    public static function of(): DateTimeSetFieldBuilder
    {
        return new self();
    }
}
