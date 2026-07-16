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
 * @implements Builder<McpServerType>
 */
final class McpServerTypeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $type;

    /**

     * @var ?string
     */
    private $majorVersion;

    /**

     * @var ?McpServerTypeToolCollection
     */
    private $tools;

    /**
     * <p>Identifier of the MCP Server type, such as <code>CommerceMCP</code>.</p>
     *

     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>Major version of the MCP Server type, such as <code>v4</code>.</p>
     *

     * @return null|string
     */
    public function getMajorVersion()
    {
        return $this->majorVersion;
    }

    /**
     * <p>Tools available for this MCP Server type and major version.</p>
     *

     * @return null|McpServerTypeToolCollection
     */
    public function getTools()
    {
        return $this->tools;
    }

    /**
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?string $majorVersion
     * @return $this
     */
    public function withMajorVersion(?string $majorVersion)
    {
        $this->majorVersion = $majorVersion;

        return $this;
    }

    /**
     * @param ?McpServerTypeToolCollection $tools
     * @return $this
     */
    public function withTools(?McpServerTypeToolCollection $tools)
    {
        $this->tools = $tools;

        return $this;
    }


    public function build(): McpServerType
    {
        return new McpServerTypeModel(
            $this->type,
            $this->majorVersion,
            $this->tools
        );
    }

    public static function of(): McpServerTypeBuilder
    {
        return new self();
    }
}
