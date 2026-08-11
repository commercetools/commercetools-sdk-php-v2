<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerJsonOutputFiltering extends JsonObject
{
    public const FIELD_REDACT = 'redact';
    public const FIELD_DROP = 'drop';
    public const FIELD_FIELD_PATHS_TO_KEEP = 'fieldPathsToKeep';
    public const FIELD_REDACTED_WITH = 'redactedWith';

    /**
     * <p>Fields whose values are replaced with a placeholder. The field itself is kept.</p>
     *

     * @return null|McpServerJsonOutputFilteringMatcher
     */
    public function getRedact();

    /**
     * <p>Fields that are removed entirely from the response.</p>
     *

     * @return null|McpServerJsonOutputFilteringMatcher
     */
    public function getDrop();

    /**
     * <p>Exact dotted paths kept even when they would otherwise match <code>redact</code> or <code>drop</code>.</p>
     *

     * @return null|array
     */
    public function getFieldPathsToKeep();

    /**
     * <p>Placeholder written in place of redacted values. When unset, the MCP Server applies its own default (<code>[REDACTED]</code>).</p>
     *

     * @return null|string
     */
    public function getRedactedWith();

    /**
     * @param ?McpServerJsonOutputFilteringMatcher $redact
     */
    public function setRedact(?McpServerJsonOutputFilteringMatcher $redact): void;

    /**
     * @param ?McpServerJsonOutputFilteringMatcher $drop
     */
    public function setDrop(?McpServerJsonOutputFilteringMatcher $drop): void;

    /**
     * @param ?array $fieldPathsToKeep
     */
    public function setFieldPathsToKeep(?array $fieldPathsToKeep): void;

    /**
     * @param ?string $redactedWith
     */
    public function setRedactedWith(?string $redactedWith): void;
}
