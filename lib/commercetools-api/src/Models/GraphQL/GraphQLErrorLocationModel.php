<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQL;

use Commercetools\Base\JsonObjectModel;

final class GraphQLErrorLocationModel extends JsonObjectModel implements GraphQLErrorLocation
{
    /**
     * @var ?int
     */
    protected $line;

    /**
     * @var ?int
     */
    protected $column;

    public function __construct(
        int $line = null,
        int $column = null
    ) {
        $this->line = $line;
        $this->column = $column;
    }

    /**
     * @return null|int
     */
    public function getLine()
    {
        if (is_null($this->line)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(GraphQLErrorLocation::FIELD_LINE);
            if (is_null($data)) {
                return null;
            }
            $this->line = (int) $data;
        }

        return $this->line;
    }

    /**
     * @return null|int
     */
    public function getColumn()
    {
        if (is_null($this->column)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(GraphQLErrorLocation::FIELD_COLUMN);
            if (is_null($data)) {
                return null;
            }
            $this->column = (int) $data;
        }

        return $this->column;
    }

    public function setLine(?int $line): void
    {
        $this->line = $line;
    }

    public function setColumn(?int $column): void
    {
        $this->column = $column;
    }
}
