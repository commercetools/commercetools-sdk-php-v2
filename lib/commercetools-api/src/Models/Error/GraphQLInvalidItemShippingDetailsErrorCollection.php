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
 * @extends GraphQLErrorObjectCollection<GraphQLInvalidItemShippingDetailsError>
 * @method GraphQLInvalidItemShippingDetailsError current()
 * @method GraphQLInvalidItemShippingDetailsError end()
 * @method GraphQLInvalidItemShippingDetailsError at($offset)
 */
class GraphQLInvalidItemShippingDetailsErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInvalidItemShippingDetailsError $value
     * @psalm-param GraphQLInvalidItemShippingDetailsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInvalidItemShippingDetailsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInvalidItemShippingDetailsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInvalidItemShippingDetailsError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInvalidItemShippingDetailsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInvalidItemShippingDetailsError $data */
                $data = GraphQLInvalidItemShippingDetailsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
