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
 * @implements Builder<McpServerUpdate>
 */
final class McpServerUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?McpServerUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the MCP Server on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error is returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the MCP Server.</p>
     *

     * @return null|McpServerUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?McpServerUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?McpServerUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): McpServerUpdate
    {
        return new McpServerUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): McpServerUpdateBuilder
    {
        return new self();
    }
}
