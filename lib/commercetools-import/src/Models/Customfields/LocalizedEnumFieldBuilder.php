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
 * @implements Builder<LocalizedEnumField>
 */
final class LocalizedEnumFieldBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $value;

    /**
     * <p>The key of the localized enum value.
     * Must match the key of a <a href="ctp:api:type:CustomFieldLocalizedEnumValue">CustomFieldLocalizedEnumValue</a> in the <a href="ctp:api:type:CustomFieldLocalizedEnumType">CustomFieldLocalizedEnumType</a>.</p>
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


    public function build(): LocalizedEnumField
    {
        return new LocalizedEnumFieldModel(
            $this->value
        );
    }

    public static function of(): LocalizedEnumFieldBuilder
    {
        return new self();
    }
}
