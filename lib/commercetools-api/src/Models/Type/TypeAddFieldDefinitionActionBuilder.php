<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<TypeAddFieldDefinitionAction>
 */
final class TypeAddFieldDefinitionActionBuilder implements Builder
{
    /**
     * @var null|FieldDefinition|FieldDefinitionBuilder
     */
    private $fieldDefinition;

    /**
     * @return null|FieldDefinition
     */
    public function getFieldDefinition()
    {
        return $this->fieldDefinition instanceof FieldDefinitionBuilder ? $this->fieldDefinition->build() : $this->fieldDefinition;
    }

    /**
     * @return $this
     */
    public function withFieldDefinition(?FieldDefinition $fieldDefinition)
    {
        $this->fieldDefinition = $fieldDefinition;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFieldDefinitionBuilder(?FieldDefinitionBuilder $fieldDefinition)
    {
        $this->fieldDefinition = $fieldDefinition;

        return $this;
    }

    public function build(): TypeAddFieldDefinitionAction
    {
        return new TypeAddFieldDefinitionActionModel(
            $this->fieldDefinition instanceof FieldDefinitionBuilder ? $this->fieldDefinition->build() : $this->fieldDefinition
        );
    }

    public static function of(): TypeAddFieldDefinitionActionBuilder
    {
        return new self();
    }
}
