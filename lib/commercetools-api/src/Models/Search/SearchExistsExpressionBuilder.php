<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SearchExistsExpression>
 */
final class SearchExistsExpressionBuilder implements Builder
{
    /**

     * @var null|SearchExistsValue|SearchExistsValueBuilder
     */
    private $exists;

    /**

     * @return null|SearchExistsValue
     */
    public function getExists()
    {
        return $this->exists instanceof SearchExistsValueBuilder ? $this->exists->build() : $this->exists;
    }

    /**
     * @param ?SearchExistsValue $exists
     * @return $this
     */
    public function withExists(?SearchExistsValue $exists)
    {
        $this->exists = $exists;

        return $this;
    }

    /**
     * @deprecated use withExists() instead
     * @return $this
     */
    public function withExistsBuilder(?SearchExistsValueBuilder $exists)
    {
        $this->exists = $exists;

        return $this;
    }

    public function build(): SearchExistsExpression
    {
        return new SearchExistsExpressionModel(
            $this->exists instanceof SearchExistsValueBuilder ? $this->exists->build() : $this->exists
        );
    }

    public static function of(): SearchExistsExpressionBuilder
    {
        return new self();
    }
}
