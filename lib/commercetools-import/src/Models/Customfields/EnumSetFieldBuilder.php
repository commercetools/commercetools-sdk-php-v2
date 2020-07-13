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
 * @implements Builder<EnumSetField>
 */
final class EnumSetFieldBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $value;

    /**
     * @return null|array
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?array $value
     * @return $this
     */
    public function withValue(?array $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): EnumSetField
    {
        return new EnumSetFieldModel(
            $this->value
        );
    }

    public static function of(): EnumSetFieldBuilder
    {
        return new self();
    }
}
