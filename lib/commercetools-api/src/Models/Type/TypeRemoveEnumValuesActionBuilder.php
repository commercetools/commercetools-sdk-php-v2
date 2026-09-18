<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TypeRemoveEnumValuesAction>
 */
final class TypeRemoveEnumValuesActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $fieldName;

    /**

     * @var ?array
     */
    private $keys;

    /**
     * <p><code>name</code> of the <a href="ctp:api:type:FieldDefinition">FieldDefinition</a> to update.</p>
     *

     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * <p>Keys of the <a href="ctp:api:type:CustomFieldEnumValue">EnumValues</a> to remove. An empty array results in no change.</p>
     *

     * @return null|array
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * @param ?string $fieldName
     * @return $this
     */
    public function withFieldName(?string $fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * @param ?array $keys
     * @return $this
     */
    public function withKeys(?array $keys)
    {
        $this->keys = $keys;

        return $this;
    }


    public function build(): TypeRemoveEnumValuesAction
    {
        return new TypeRemoveEnumValuesActionModel(
            $this->fieldName,
            $this->keys
        );
    }

    public static function of(): TypeRemoveEnumValuesActionBuilder
    {
        return new self();
    }
}
