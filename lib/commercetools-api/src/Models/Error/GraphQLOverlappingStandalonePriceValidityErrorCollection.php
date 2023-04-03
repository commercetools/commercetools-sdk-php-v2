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
 * @extends GraphQLErrorObjectCollection<GraphQLOverlappingStandalonePriceValidityError>
 * @method GraphQLOverlappingStandalonePriceValidityError current()
 * @method GraphQLOverlappingStandalonePriceValidityError end()
 * @method GraphQLOverlappingStandalonePriceValidityError at($offset)
 */
class GraphQLOverlappingStandalonePriceValidityErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLOverlappingStandalonePriceValidityError $value
     * @psalm-param GraphQLOverlappingStandalonePriceValidityError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLOverlappingStandalonePriceValidityErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLOverlappingStandalonePriceValidityError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLOverlappingStandalonePriceValidityError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLOverlappingStandalonePriceValidityError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLOverlappingStandalonePriceValidityError $data */
                $data = GraphQLOverlappingStandalonePriceValidityErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
