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
     * <p>JSON array of enum values, each represented by its key.
     * Each key must match the key of a <a href="ctp:api:type:CustomFieldEnumValue">CustomFieldLocalizedEnumValue</a> in the <a href="ctp:api:type:CustomFieldEnumType">CustomFieldEnumType</a>.
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
