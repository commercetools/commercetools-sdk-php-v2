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
 * @extends GraphQLErrorObjectCollection<GraphQLPriceChangedError>
 * @method GraphQLPriceChangedError current()
 * @method GraphQLPriceChangedError end()
 * @method GraphQLPriceChangedError at($offset)
 */
class GraphQLPriceChangedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLPriceChangedError $value
     * @psalm-param GraphQLPriceChangedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLPriceChangedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLPriceChangedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLPriceChangedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLPriceChangedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLPriceChangedError $data */
                $data = GraphQLPriceChangedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
