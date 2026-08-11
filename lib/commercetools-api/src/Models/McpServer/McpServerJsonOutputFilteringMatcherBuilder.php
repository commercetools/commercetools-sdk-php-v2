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
 * @implements Builder<McpServerJsonOutputFilteringMatcher>
 */
final class McpServerJsonOutputFilteringMatcherBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $fieldPaths;

    /**

     * @var ?array
     */
    private $fieldNames;

    /**

     * @var ?array
     */
    private $fieldNameContains;

    /**
     * <p>Exact dotted paths to match, for example <code>customer.password</code>. Matched case-sensitively.</p>
     *

     * @return null|array
     */
    public function getFieldPaths()
    {
        return $this->fieldPaths;
    }

    /**
     * <p>Exact field names to match at any depth, for example <code>password</code>. Matched case-sensitively.</p>
     *

     * @return null|array
     */
    public function getFieldNames()
    {
        return $this->fieldNames;
    }

    /**
     * <p>Substrings to match against field names at any depth, for example <code>secret</code>. Matched case-insensitively.</p>
     *

     * @return null|array
     */
    public function getFieldNameContains()
    {
        return $this->fieldNameContains;
    }

    /**
     * @param ?array $fieldPaths
     * @return $this
     */
    public function withFieldPaths(?array $fieldPaths)
    {
        $this->fieldPaths = $fieldPaths;

        return $this;
    }

    /**
     * @param ?array $fieldNames
     * @return $this
     */
    public function withFieldNames(?array $fieldNames)
    {
        $this->fieldNames = $fieldNames;

        return $this;
    }

    /**
     * @param ?array $fieldNameContains
     * @return $this
     */
    public function withFieldNameContains(?array $fieldNameContains)
    {
        $this->fieldNameContains = $fieldNameContains;

        return $this;
    }


    public function build(): McpServerJsonOutputFilteringMatcher
    {
        return new McpServerJsonOutputFilteringMatcherModel(
            $this->fieldPaths,
            $this->fieldNames,
            $this->fieldNameContains
        );
    }

    public static function of(): McpServerJsonOutputFilteringMatcherBuilder
    {
        return new self();
    }
}
