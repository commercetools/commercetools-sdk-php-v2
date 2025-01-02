<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\GraphQl;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLErrorLocation>
 */
final class GraphQLErrorLocationBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $line;

    /**

     * @var ?int
     */
    private $column;

    /**
     * <p>Line number of the query where the error occurred.</p>
     *

     * @return null|int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * <p>Position in <code>line</code> where the error occurred.</p>
     *

     * @return null|int
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @param ?int $line
     * @return $this
     */
    public function withLine(?int $line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * @param ?int $column
     * @return $this
     */
    public function withColumn(?int $column)
    {
        $this->column = $column;

        return $this;
    }


    public function build(): GraphQLErrorLocation
    {
        return new GraphQLErrorLocationModel(
            $this->line,
            $this->column
        );
    }

    public static function of(): GraphQLErrorLocationBuilder
    {
        return new self();
    }
}
