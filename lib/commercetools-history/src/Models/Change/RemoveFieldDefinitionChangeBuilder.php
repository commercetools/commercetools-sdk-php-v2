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
 * @implements Builder<RemoveFieldDefinitionChange>
 */
final class RemoveFieldDefinitionChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|FieldDefinition|FieldDefinitionBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>removeFieldDefinition</code> on payments</p>
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
    public function getPreviousValue()
    {
        return $this->previousValue instanceof FieldDefinitionBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?FieldDefinition $previousValue
     * @return $this
     */
    public function withPreviousValue(?FieldDefinition $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?FieldDefinitionBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveFieldDefinitionChange
    {
        return new RemoveFieldDefinitionChangeModel(
            $this->change,
            $this->previousValue instanceof FieldDefinitionBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveFieldDefinitionChangeBuilder
    {
        return new self();
    }
}
