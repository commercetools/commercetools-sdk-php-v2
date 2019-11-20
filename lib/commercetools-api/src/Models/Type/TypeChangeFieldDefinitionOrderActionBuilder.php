<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypeChangeFieldDefinitionOrderAction>
 */
final class TypeChangeFieldDefinitionOrderActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $fieldNames;

    /**
     * @return null|array
     */
    public function getFieldNames()
    {
        return $this->fieldNames;
    }

    /**
     * @return $this
     */
    public function withFieldNames(?array $fieldNames)
    {
        $this->fieldNames = $fieldNames;

        return $this;
    }

    public function build(): TypeChangeFieldDefinitionOrderAction
    {
        return new TypeChangeFieldDefinitionOrderActionModel(
            $this->fieldNames
        );
    }

    public static function of(): TypeChangeFieldDefinitionOrderActionBuilder
    {
        return new self();
    }
}
