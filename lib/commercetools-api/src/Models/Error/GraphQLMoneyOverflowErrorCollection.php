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
 * @extends GraphQLErrorObjectCollection<GraphQLMoneyOverflowError>
 * @method GraphQLMoneyOverflowError current()
 * @method GraphQLMoneyOverflowError end()
 * @method GraphQLMoneyOverflowError at($offset)
 */
class GraphQLMoneyOverflowErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLMoneyOverflowError $value
     * @psalm-param GraphQLMoneyOverflowError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLMoneyOverflowErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLMoneyOverflowError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLMoneyOverflowError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLMoneyOverflowError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLMoneyOverflowError $data */
                $data = GraphQLMoneyOverflowErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
