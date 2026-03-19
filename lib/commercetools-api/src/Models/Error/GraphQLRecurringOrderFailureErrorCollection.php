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
 * @extends GraphQLErrorObjectCollection<GraphQLRecurringOrderFailureError>
 * @method GraphQLRecurringOrderFailureError current()
 * @method GraphQLRecurringOrderFailureError end()
 * @method GraphQLRecurringOrderFailureError at($offset)
 */
class GraphQLRecurringOrderFailureErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLRecurringOrderFailureError $value
     * @psalm-param GraphQLRecurringOrderFailureError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLRecurringOrderFailureErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLRecurringOrderFailureError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLRecurringOrderFailureError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLRecurringOrderFailureError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLRecurringOrderFailureError $data */
                $data = GraphQLRecurringOrderFailureErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
