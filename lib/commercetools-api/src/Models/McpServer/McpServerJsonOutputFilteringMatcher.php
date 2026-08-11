<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerJsonOutputFilteringMatcher extends JsonObject
{
    public const FIELD_FIELD_PATHS = 'fieldPaths';
    public const FIELD_FIELD_NAMES = 'fieldNames';
    public const FIELD_FIELD_NAME_CONTAINS = 'fieldNameContains';

    /**
     * <p>Exact dotted paths to match, for example <code>customer.password</code>. Matched case-sensitively.</p>
     *

     * @return null|array
     */
    public function getFieldPaths();

    /**
     * <p>Exact field names to match at any depth, for example <code>password</code>. Matched case-sensitively.</p>
     *

     * @return null|array
     */
    public function getFieldNames();

    /**
     * <p>Substrings to match against field names at any depth, for example <code>secret</code>. Matched case-insensitively.</p>
     *

     * @return null|array
     */
    public function getFieldNameContains();

    /**
     * @param ?array $fieldPaths
     */
    public function setFieldPaths(?array $fieldPaths): void;

    /**
     * @param ?array $fieldNames
     */
    public function setFieldNames(?array $fieldNames): void;

    /**
     * @param ?array $fieldNameContains
     */
    public function setFieldNameContains(?array $fieldNameContains): void;
}
