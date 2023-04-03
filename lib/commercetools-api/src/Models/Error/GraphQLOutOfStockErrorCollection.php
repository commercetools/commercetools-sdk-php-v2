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
 * @extends GraphQLErrorObjectCollection<GraphQLOutOfStockError>
 * @method GraphQLOutOfStockError current()
 * @method GraphQLOutOfStockError end()
 * @method GraphQLOutOfStockError at($offset)
 */
class GraphQLOutOfStockErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLOutOfStockError $value
     * @psalm-param GraphQLOutOfStockError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLOutOfStockErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLOutOfStockError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLOutOfStockError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLOutOfStockError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLOutOfStockError $data */
                $data = GraphQLOutOfStockErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
