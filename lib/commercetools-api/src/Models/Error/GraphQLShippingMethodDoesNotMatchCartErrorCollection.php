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
 * @extends GraphQLErrorObjectCollection<GraphQLShippingMethodDoesNotMatchCartError>
 * @method GraphQLShippingMethodDoesNotMatchCartError current()
 * @method GraphQLShippingMethodDoesNotMatchCartError end()
 * @method GraphQLShippingMethodDoesNotMatchCartError at($offset)
 */
class GraphQLShippingMethodDoesNotMatchCartErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLShippingMethodDoesNotMatchCartError $value
     * @psalm-param GraphQLShippingMethodDoesNotMatchCartError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLShippingMethodDoesNotMatchCartErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLShippingMethodDoesNotMatchCartError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLShippingMethodDoesNotMatchCartError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLShippingMethodDoesNotMatchCartError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLShippingMethodDoesNotMatchCartError $data */
                $data = GraphQLShippingMethodDoesNotMatchCartErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
