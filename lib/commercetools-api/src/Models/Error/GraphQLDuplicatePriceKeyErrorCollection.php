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
 * @extends GraphQLErrorObjectCollection<GraphQLDuplicatePriceKeyError>
 * @method GraphQLDuplicatePriceKeyError current()
 * @method GraphQLDuplicatePriceKeyError end()
 * @method GraphQLDuplicatePriceKeyError at($offset)
 */
class GraphQLDuplicatePriceKeyErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLDuplicatePriceKeyError $value
     * @psalm-param GraphQLDuplicatePriceKeyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLDuplicatePriceKeyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLDuplicatePriceKeyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLDuplicatePriceKeyError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLDuplicatePriceKeyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLDuplicatePriceKeyError $data */
                $data = GraphQLDuplicatePriceKeyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
