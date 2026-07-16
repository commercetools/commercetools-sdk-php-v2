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
 * @implements Builder<McpServerSetToolCustomizationsAction>
 */
final class McpServerSetToolCustomizationsActionBuilder implements Builder
{
    /**

     * @var ?ToolCustomizationCollection
     */
    private $toolCustomizations;

    /**
     * <p>New list of tool customizations. Replaces the existing list entirely.</p>
     *

     * @return null|ToolCustomizationCollection
     */
    public function getToolCustomizations()
    {
        return $this->toolCustomizations;
    }

    /**
     * @param ?ToolCustomizationCollection $toolCustomizations
     * @return $this
     */
    public function withToolCustomizations(?ToolCustomizationCollection $toolCustomizations)
    {
        $this->toolCustomizations = $toolCustomizations;

        return $this;
    }


    public function build(): McpServerSetToolCustomizationsAction
    {
        return new McpServerSetToolCustomizationsActionModel(
            $this->toolCustomizations
        );
    }

    public static function of(): McpServerSetToolCustomizationsActionBuilder
    {
        return new self();
    }
}
