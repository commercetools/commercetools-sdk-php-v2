<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\GraphQLErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GraphQLErrorObjectCollection<GraphQLSearchFacetPathNotFoundError>
 * @method GraphQLSearchFacetPathNotFoundError current()
 * @method GraphQLSearchFacetPathNotFoundError end()
 * @method GraphQLSearchFacetPathNotFoundError at($offset)
 */
class GraphQLSearchFacetPathNotFoundErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLSearchFacetPathNotFoundError $value
     * @psalm-param GraphQLSearchFacetPathNotFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLSearchFacetPathNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLSearchFacetPathNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLSearchFacetPathNotFoundError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLSearchFacetPathNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLSearchFacetPathNotFoundError $data */
                $data = GraphQLSearchFacetPathNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
