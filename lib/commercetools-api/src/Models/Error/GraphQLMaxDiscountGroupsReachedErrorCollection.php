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
 * @extends GraphQLErrorObjectCollection<GraphQLMaxDiscountGroupsReachedError>
 * @method GraphQLMaxDiscountGroupsReachedError current()
 * @method GraphQLMaxDiscountGroupsReachedError end()
 * @method GraphQLMaxDiscountGroupsReachedError at($offset)
 */
class GraphQLMaxDiscountGroupsReachedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLMaxDiscountGroupsReachedError $value
     * @psalm-param GraphQLMaxDiscountGroupsReachedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLMaxDiscountGroupsReachedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLMaxDiscountGroupsReachedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLMaxDiscountGroupsReachedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLMaxDiscountGroupsReachedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLMaxDiscountGroupsReachedError $data */
                $data = GraphQLMaxDiscountGroupsReachedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
