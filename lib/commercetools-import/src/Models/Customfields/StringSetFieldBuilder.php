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
 * @implements Builder<StringSetField>
 */
final class StringSetFieldBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $value;

    /**
     * <p>JSON array of strings.
     * The order of items in the array is not fixed.</p>
     *

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


    public function build(): StringSetField
    {
        return new StringSetFieldModel(
            $this->value
        );
    }

    public static function of(): StringSetFieldBuilder
    {
        return new self();
    }
}
