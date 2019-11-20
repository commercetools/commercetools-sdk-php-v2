<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypeChangeEnumValueOrderAction>
 */
final class TypeChangeEnumValueOrderActionBuilder implements Builder
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
     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @return null|array
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * @return $this
     */
    public function withFieldName(?string $fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKeys(?array $keys)
    {
        $this->keys = $keys;

        return $this;
    }

    public function build(): TypeChangeEnumValueOrderAction
    {
        return new TypeChangeEnumValueOrderActionModel(
            $this->fieldName,
            $this->keys
        );
    }

    public static function of(): TypeChangeEnumValueOrderActionBuilder
    {
        return new self();
    }
}
