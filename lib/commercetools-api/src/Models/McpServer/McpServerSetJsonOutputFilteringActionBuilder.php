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
 * @implements Builder<McpServerSetJsonOutputFilteringAction>
 */
final class McpServerSetJsonOutputFilteringActionBuilder implements Builder
{
    /**

     * @var null|McpServerJsonOutputFiltering|McpServerJsonOutputFilteringBuilder
     */
    private $jsonOutputFiltering;

    /**
     * <p>Value to set. The existing configuration is entirely replaced with this value. If absent, the existing filtering configuration is removed.</p>
     *

     * @return null|McpServerJsonOutputFiltering
     */
    public function getJsonOutputFiltering()
    {
        return $this->jsonOutputFiltering instanceof McpServerJsonOutputFilteringBuilder ? $this->jsonOutputFiltering->build() : $this->jsonOutputFiltering;
    }

    /**
     * @param ?McpServerJsonOutputFiltering $jsonOutputFiltering
     * @return $this
     */
    public function withJsonOutputFiltering(?McpServerJsonOutputFiltering $jsonOutputFiltering)
    {
        $this->jsonOutputFiltering = $jsonOutputFiltering;

        return $this;
    }

    /**
     * @deprecated use withJsonOutputFiltering() instead
     * @return $this
     */
    public function withJsonOutputFilteringBuilder(?McpServerJsonOutputFilteringBuilder $jsonOutputFiltering)
    {
        $this->jsonOutputFiltering = $jsonOutputFiltering;

        return $this;
    }

    public function build(): McpServerSetJsonOutputFilteringAction
    {
        return new McpServerSetJsonOutputFilteringActionModel(
            $this->jsonOutputFiltering instanceof McpServerJsonOutputFilteringBuilder ? $this->jsonOutputFiltering->build() : $this->jsonOutputFiltering
        );
    }

    public static function of(): McpServerSetJsonOutputFilteringActionBuilder
    {
        return new self();
    }
}
