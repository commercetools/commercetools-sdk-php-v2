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
 * @implements Builder<EnumField>
 */
final class EnumFieldBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $value;

    /**
     * <p>The key of the enum value.
     * Must be a <code>key</code> of one of the <a href="ctp:api:type:CustomFieldEnumValue">CustomFieldEnumValues</a> defined in the <a href="ctp:api:type:CustomFieldEnumType">CustomFieldEnumType</a>.</p>
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


    public function build(): EnumField
    {
        return new EnumFieldModel(
            $this->value
        );
    }

    public static function of(): EnumFieldBuilder
    {
        return new self();
    }
}
