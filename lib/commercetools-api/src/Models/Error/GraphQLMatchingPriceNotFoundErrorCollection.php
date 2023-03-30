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
 * @extends GraphQLErrorObjectCollection<GraphQLMatchingPriceNotFoundError>
 * @method GraphQLMatchingPriceNotFoundError current()
 * @method GraphQLMatchingPriceNotFoundError end()
 * @method GraphQLMatchingPriceNotFoundError at($offset)
 */
class GraphQLMatchingPriceNotFoundErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLMatchingPriceNotFoundError $value
     * @psalm-param GraphQLMatchingPriceNotFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLMatchingPriceNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLMatchingPriceNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLMatchingPriceNotFoundError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLMatchingPriceNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLMatchingPriceNotFoundError $data */
                $data = GraphQLMatchingPriceNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
