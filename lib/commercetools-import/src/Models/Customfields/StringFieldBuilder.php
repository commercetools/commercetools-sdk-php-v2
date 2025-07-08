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
 * @implements Builder<StringField>
 */
final class StringFieldBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $value;

    /**
     * <p>A text value.</p>
     *

     * @return null|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?string $value
     * @return $this
     */
    public function withValue(?string $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): StringField
    {
        return new StringFieldModel(
            $this->value
        );
    }

    public static function of(): StringFieldBuilder
    {
        return new self();
    }
}
