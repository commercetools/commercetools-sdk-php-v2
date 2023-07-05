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
 * @extends GraphQLErrorObjectCollection<GraphQLMaxCartDiscountsReachedError>
 * @method GraphQLMaxCartDiscountsReachedError current()
 * @method GraphQLMaxCartDiscountsReachedError end()
 * @method GraphQLMaxCartDiscountsReachedError at($offset)
 */
class GraphQLMaxCartDiscountsReachedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLMaxCartDiscountsReachedError $value
     * @psalm-param GraphQLMaxCartDiscountsReachedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLMaxCartDiscountsReachedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLMaxCartDiscountsReachedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLMaxCartDiscountsReachedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLMaxCartDiscountsReachedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLMaxCartDiscountsReachedError $data */
                $data = GraphQLMaxCartDiscountsReachedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
