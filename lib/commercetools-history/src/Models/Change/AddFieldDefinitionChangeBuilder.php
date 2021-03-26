<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\FieldDefinition;
use Commercetools\History\Models\Common\FieldDefinitionBuilder;

/**
 * @implements Builder<AddFieldDefinitionChange>
 */
final class AddFieldDefinitionChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|FieldDefinition|FieldDefinitionBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>addFieldDefinition</code> on payments</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|FieldDefinition
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof FieldDefinitionBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?FieldDefinition $nextValue
     * @return $this
     */
    public function withNextValue(?FieldDefinition $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?FieldDefinitionBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddFieldDefinitionChange
    {
        return new AddFieldDefinitionChangeModel(
            $this->change,
            $this->nextValue instanceof FieldDefinitionBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddFieldDefinitionChangeBuilder
    {
        return new self();
    }
}
