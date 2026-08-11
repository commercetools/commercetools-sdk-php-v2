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
 * @implements Builder<McpServerJsonOutputFiltering>
 */
final class McpServerJsonOutputFilteringBuilder implements Builder
{
    /**

     * @var null|McpServerJsonOutputFilteringMatcher|McpServerJsonOutputFilteringMatcherBuilder
     */
    private $redact;

    /**

     * @var null|McpServerJsonOutputFilteringMatcher|McpServerJsonOutputFilteringMatcherBuilder
     */
    private $drop;

    /**

     * @var ?array
     */
    private $fieldPathsToKeep;

    /**

     * @var ?string
     */
    private $redactedWith;

    /**
     * <p>Fields whose values are replaced with a placeholder. The field itself is kept.</p>
     *

     * @return null|McpServerJsonOutputFilteringMatcher
     */
    public function getRedact()
    {
        return $this->redact instanceof McpServerJsonOutputFilteringMatcherBuilder ? $this->redact->build() : $this->redact;
    }

    /**
     * <p>Fields that are removed entirely from the response.</p>
     *

     * @return null|McpServerJsonOutputFilteringMatcher
     */
    public function getDrop()
    {
        return $this->drop instanceof McpServerJsonOutputFilteringMatcherBuilder ? $this->drop->build() : $this->drop;
    }

    /**
     * <p>Exact dotted paths kept even when they would otherwise match <code>redact</code> or <code>drop</code>.</p>
     *

     * @return null|array
     */
    public function getFieldPathsToKeep()
    {
        return $this->fieldPathsToKeep;
    }

    /**
     * <p>Placeholder written in place of redacted values. When unset, the MCP Server applies its own default (<code>[REDACTED]</code>).</p>
     *

     * @return null|string
     */
    public function getRedactedWith()
    {
        return $this->redactedWith;
    }

    /**
     * @param ?McpServerJsonOutputFilteringMatcher $redact
     * @return $this
     */
    public function withRedact(?McpServerJsonOutputFilteringMatcher $redact)
    {
        $this->redact = $redact;

        return $this;
    }

    /**
     * @param ?McpServerJsonOutputFilteringMatcher $drop
     * @return $this
     */
    public function withDrop(?McpServerJsonOutputFilteringMatcher $drop)
    {
        $this->drop = $drop;

        return $this;
    }

    /**
     * @param ?array $fieldPathsToKeep
     * @return $this
     */
    public function withFieldPathsToKeep(?array $fieldPathsToKeep)
    {
        $this->fieldPathsToKeep = $fieldPathsToKeep;

        return $this;
    }

    /**
     * @param ?string $redactedWith
     * @return $this
     */
    public function withRedactedWith(?string $redactedWith)
    {
        $this->redactedWith = $redactedWith;

        return $this;
    }

    /**
     * @deprecated use withRedact() instead
     * @return $this
     */
    public function withRedactBuilder(?McpServerJsonOutputFilteringMatcherBuilder $redact)
    {
        $this->redact = $redact;

        return $this;
    }

    /**
     * @deprecated use withDrop() instead
     * @return $this
     */
    public function withDropBuilder(?McpServerJsonOutputFilteringMatcherBuilder $drop)
    {
        $this->drop = $drop;

        return $this;
    }

    public function build(): McpServerJsonOutputFiltering
    {
        return new McpServerJsonOutputFilteringModel(
            $this->redact instanceof McpServerJsonOutputFilteringMatcherBuilder ? $this->redact->build() : $this->redact,
            $this->drop instanceof McpServerJsonOutputFilteringMatcherBuilder ? $this->drop->build() : $this->drop,
            $this->fieldPathsToKeep,
            $this->redactedWith
        );
    }

    public static function of(): McpServerJsonOutputFilteringBuilder
    {
        return new self();
    }
}
