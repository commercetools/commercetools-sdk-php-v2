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
 * @extends GraphQLErrorObjectCollection<GraphQLNoMatchingProductDiscountFoundError>
 * @method GraphQLNoMatchingProductDiscountFoundError current()
 * @method GraphQLNoMatchingProductDiscountFoundError end()
 * @method GraphQLNoMatchingProductDiscountFoundError at($offset)
 */
class GraphQLNoMatchingProductDiscountFoundErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLNoMatchingProductDiscountFoundError $value
     * @psalm-param GraphQLNoMatchingProductDiscountFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLNoMatchingProductDiscountFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLNoMatchingProductDiscountFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLNoMatchingProductDiscountFoundError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLNoMatchingProductDiscountFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLNoMatchingProductDiscountFoundError $data */
                $data = GraphQLNoMatchingProductDiscountFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
