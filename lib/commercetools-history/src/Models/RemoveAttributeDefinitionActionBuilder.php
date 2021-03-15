<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RemoveAttributeDefinitionAction>
 */
final class RemoveAttributeDefinitionActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|AttributeDefinition|AttributeDefinitionBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>removeAttributeDefinition</code> on product types</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|AttributeDefinition
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof AttributeDefinitionBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?AttributeDefinition $previousValue
     * @return $this
     */
    public function withPreviousValue(?AttributeDefinition $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?AttributeDefinitionBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveAttributeDefinitionAction
    {
        return new RemoveAttributeDefinitionActionModel(
            $this->change,
            $this->previousValue instanceof AttributeDefinitionBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveAttributeDefinitionActionBuilder
    {
        return new self();
    }
}
