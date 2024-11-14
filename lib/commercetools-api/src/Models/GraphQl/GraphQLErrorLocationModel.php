<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLErrorLocationModel extends JsonObjectModel implements GraphQLErrorLocation
{
    /**
     *
     * @var ?int
     */
    protected $line;

    /**
     *
     * @var ?int
     */
    protected $column;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $line = null,
        ?int $column = null
    ) {
        $this->line = $line;
        $this->column = $column;
    }

    /**
     * <p>Line number of the query where the error occurred.</p>
     *
     *
     * @return null|int
     */
    public function getLine()
    {
        if (is_null($this->line)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LINE);
            if (is_null($data)) {
                return null;
            }
            $this->line = (int) $data;
        }

        return $this->line;
    }

    /**
     * <p>Position in <code>line</code> where the error occurred.</p>
     *
     *
     * @return null|int
     */
    public function getColumn()
    {
        if (is_null($this->column)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_COLUMN);
            if (is_null($data)) {
                return null;
            }
            $this->column = (int) $data;
        }

        return $this->column;
    }


    /**
     * @param ?int $line
     */
    public function setLine(?int $line): void
    {
        $this->line = $line;
    }

    /**
     * @param ?int $column
     */
    public function setColumn(?int $column): void
    {
        $this->column = $column;
    }
}
