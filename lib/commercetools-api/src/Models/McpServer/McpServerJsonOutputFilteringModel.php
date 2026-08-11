<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class McpServerJsonOutputFilteringModel extends JsonObjectModel implements McpServerJsonOutputFiltering
{
    /**
     *
     * @var ?McpServerJsonOutputFilteringMatcher
     */
    protected $redact;

    /**
     *
     * @var ?McpServerJsonOutputFilteringMatcher
     */
    protected $drop;

    /**
     *
     * @var ?array
     */
    protected $fieldPathsToKeep;

    /**
     *
     * @var ?string
     */
    protected $redactedWith;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?McpServerJsonOutputFilteringMatcher $redact = null,
        ?McpServerJsonOutputFilteringMatcher $drop = null,
        ?array $fieldPathsToKeep = null,
        ?string $redactedWith = null
    ) {
        $this->redact = $redact;
        $this->drop = $drop;
        $this->fieldPathsToKeep = $fieldPathsToKeep;
        $this->redactedWith = $redactedWith;
    }

    /**
     * <p>Fields whose values are replaced with a placeholder. The field itself is kept.</p>
     *
     *
     * @return null|McpServerJsonOutputFilteringMatcher
     */
    public function getRedact()
    {
        if (is_null($this->redact)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_REDACT);
            if (is_null($data)) {
                return null;
            }

            $this->redact = McpServerJsonOutputFilteringMatcherModel::of($data);
        }

        return $this->redact;
    }

    /**
     * <p>Fields that are removed entirely from the response.</p>
     *
     *
     * @return null|McpServerJsonOutputFilteringMatcher
     */
    public function getDrop()
    {
        if (is_null($this->drop)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DROP);
            if (is_null($data)) {
                return null;
            }

            $this->drop = McpServerJsonOutputFilteringMatcherModel::of($data);
        }

        return $this->drop;
    }

    /**
     * <p>Exact dotted paths kept even when they would otherwise match <code>redact</code> or <code>drop</code>.</p>
     *
     *
     * @return null|array
     */
    public function getFieldPathsToKeep()
    {
        if (is_null($this->fieldPathsToKeep)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_FIELD_PATHS_TO_KEEP);
            if (is_null($data)) {
                return null;
            }
            $this->fieldPathsToKeep = $data;
        }

        return $this->fieldPathsToKeep;
    }

    /**
     * <p>Placeholder written in place of redacted values. When unset, the MCP Server applies its own default (<code>[REDACTED]</code>).</p>
     *
     *
     * @return null|string
     */
    public function getRedactedWith()
    {
        if (is_null($this->redactedWith)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REDACTED_WITH);
            if (is_null($data)) {
                return null;
            }
            $this->redactedWith = (string) $data;
        }

        return $this->redactedWith;
    }


    /**
     * @param ?McpServerJsonOutputFilteringMatcher $redact
     */
    public function setRedact(?McpServerJsonOutputFilteringMatcher $redact): void
    {
        $this->redact = $redact;
    }

    /**
     * @param ?McpServerJsonOutputFilteringMatcher $drop
     */
    public function setDrop(?McpServerJsonOutputFilteringMatcher $drop): void
    {
        $this->drop = $drop;
    }

    /**
     * @param ?array $fieldPathsToKeep
     */
    public function setFieldPathsToKeep(?array $fieldPathsToKeep): void
    {
        $this->fieldPathsToKeep = $fieldPathsToKeep;
    }

    /**
     * @param ?string $redactedWith
     */
    public function setRedactedWith(?string $redactedWith): void
    {
        $this->redactedWith = $redactedWith;
    }
}
