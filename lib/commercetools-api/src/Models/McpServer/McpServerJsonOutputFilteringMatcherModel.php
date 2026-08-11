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
final class McpServerJsonOutputFilteringMatcherModel extends JsonObjectModel implements McpServerJsonOutputFilteringMatcher
{
    /**
     *
     * @var ?array
     */
    protected $fieldPaths;

    /**
     *
     * @var ?array
     */
    protected $fieldNames;

    /**
     *
     * @var ?array
     */
    protected $fieldNameContains;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $fieldPaths = null,
        ?array $fieldNames = null,
        ?array $fieldNameContains = null
    ) {
        $this->fieldPaths = $fieldPaths;
        $this->fieldNames = $fieldNames;
        $this->fieldNameContains = $fieldNameContains;
    }

    /**
     * <p>Exact dotted paths to match, for example <code>customer.password</code>. Matched case-sensitively.</p>
     *
     *
     * @return null|array
     */
    public function getFieldPaths()
    {
        if (is_null($this->fieldPaths)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_FIELD_PATHS);
            if (is_null($data)) {
                return null;
            }
            $this->fieldPaths = $data;
        }

        return $this->fieldPaths;
    }

    /**
     * <p>Exact field names to match at any depth, for example <code>password</code>. Matched case-sensitively.</p>
     *
     *
     * @return null|array
     */
    public function getFieldNames()
    {
        if (is_null($this->fieldNames)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_FIELD_NAMES);
            if (is_null($data)) {
                return null;
            }
            $this->fieldNames = $data;
        }

        return $this->fieldNames;
    }

    /**
     * <p>Substrings to match against field names at any depth, for example <code>secret</code>. Matched case-insensitively.</p>
     *
     *
     * @return null|array
     */
    public function getFieldNameContains()
    {
        if (is_null($this->fieldNameContains)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_FIELD_NAME_CONTAINS);
            if (is_null($data)) {
                return null;
            }
            $this->fieldNameContains = $data;
        }

        return $this->fieldNameContains;
    }


    /**
     * @param ?array $fieldPaths
     */
    public function setFieldPaths(?array $fieldPaths): void
    {
        $this->fieldPaths = $fieldPaths;
    }

    /**
     * @param ?array $fieldNames
     */
    public function setFieldNames(?array $fieldNames): void
    {
        $this->fieldNames = $fieldNames;
    }

    /**
     * @param ?array $fieldNameContains
     */
    public function setFieldNameContains(?array $fieldNameContains): void
    {
        $this->fieldNameContains = $fieldNameContains;
    }
}
