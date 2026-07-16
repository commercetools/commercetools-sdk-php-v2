<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<McpServerRemoveToolCustomizationAction>
 */
final class McpServerRemoveToolCustomizationActionBuilder implements Builder
{
    /**

     * @var null|RemoveToolCustomizationTarget|RemoveToolCustomizationTargetBuilder
     */
    private $toolCustomization;

    /**
     * <p>Identifies the tool customization to remove by its tool name.</p>
     *

     * @return null|RemoveToolCustomizationTarget
     */
    public function getToolCustomization()
    {
        return $this->toolCustomization instanceof RemoveToolCustomizationTargetBuilder ? $this->toolCustomization->build() : $this->toolCustomization;
    }

    /**
     * @param ?RemoveToolCustomizationTarget $toolCustomization
     * @return $this
     */
    public function withToolCustomization(?RemoveToolCustomizationTarget $toolCustomization)
    {
        $this->toolCustomization = $toolCustomization;

        return $this;
    }

    /**
     * @deprecated use withToolCustomization() instead
     * @return $this
     */
    public function withToolCustomizationBuilder(?RemoveToolCustomizationTargetBuilder $toolCustomization)
    {
        $this->toolCustomization = $toolCustomization;

        return $this;
    }

    public function build(): McpServerRemoveToolCustomizationAction
    {
        return new McpServerRemoveToolCustomizationActionModel(
            $this->toolCustomization instanceof RemoveToolCustomizationTargetBuilder ? $this->toolCustomization->build() : $this->toolCustomization
        );
    }

    public static function of(): McpServerRemoveToolCustomizationActionBuilder
    {
        return new self();
    }
}
