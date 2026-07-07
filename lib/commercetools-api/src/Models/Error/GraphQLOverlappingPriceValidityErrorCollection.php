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
 * @extends GraphQLErrorObjectCollection<GraphQLOverlappingPriceValidityError>
 * @method GraphQLOverlappingPriceValidityError current()
 * @method GraphQLOverlappingPriceValidityError end()
 * @method GraphQLOverlappingPriceValidityError at($offset)
 */
class GraphQLOverlappingPriceValidityErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLOverlappingPriceValidityError $value
     * @psalm-param GraphQLOverlappingPriceValidityError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLOverlappingPriceValidityErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLOverlappingPriceValidityError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLOverlappingPriceValidityError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLOverlappingPriceValidityError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLOverlappingPriceValidityError $data */
                $data = GraphQLOverlappingPriceValidityErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
