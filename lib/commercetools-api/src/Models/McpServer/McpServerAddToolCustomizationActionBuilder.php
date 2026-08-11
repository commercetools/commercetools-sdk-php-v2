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
 * @implements Builder<McpServerAddToolCustomizationAction>
 */
final class McpServerAddToolCustomizationActionBuilder implements Builder
{
    /**

     * @var null|ToolCustomization|ToolCustomizationBuilder
     */
    private $toolCustomization;

    /**
     * <p>Tool customization to add.</p>
     *

     * @return null|ToolCustomization
     */
    public function getToolCustomization()
    {
        return $this->toolCustomization instanceof ToolCustomizationBuilder ? $this->toolCustomization->build() : $this->toolCustomization;
    }

    /**
     * @param ?ToolCustomization $toolCustomization
     * @return $this
     */
    public function withToolCustomization(?ToolCustomization $toolCustomization)
    {
        $this->toolCustomization = $toolCustomization;

        return $this;
    }

    /**
     * @deprecated use withToolCustomization() instead
     * @return $this
     */
    public function withToolCustomizationBuilder(?ToolCustomizationBuilder $toolCustomization)
    {
        $this->toolCustomization = $toolCustomization;

        return $this;
    }

    public function build(): McpServerAddToolCustomizationAction
    {
        return new McpServerAddToolCustomizationActionModel(
            $this->toolCustomization instanceof ToolCustomizationBuilder ? $this->toolCustomization->build() : $this->toolCustomization
        );
    }

    public static function of(): McpServerAddToolCustomizationActionBuilder
    {
        return new self();
    }
}
