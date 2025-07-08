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
 * @implements Builder<LocalizedEnumSetField>
 */
final class LocalizedEnumSetFieldBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $value;

    /**
     * <p>JSON array of localized enum values, each represented by its key.
     * Each key must match the key of an <a href="ctp:api:type:CustomFieldLocalizedEnumValue">CustomFieldLocalizedEnumValue</a> in the <a href="ctp:api:type:CustomFieldLocalizedEnumType">CustomFieldLocalizedEnumType</a>.
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


    public function build(): LocalizedEnumSetField
    {
        return new LocalizedEnumSetFieldModel(
            $this->value
        );
    }

    public static function of(): LocalizedEnumSetFieldBuilder
    {
        return new self();
    }
}
