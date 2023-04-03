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
 * @extends GraphQLErrorObjectCollection<GraphQLDiscountCodeNonApplicableError>
 * @method GraphQLDiscountCodeNonApplicableError current()
 * @method GraphQLDiscountCodeNonApplicableError end()
 * @method GraphQLDiscountCodeNonApplicableError at($offset)
 */
class GraphQLDiscountCodeNonApplicableErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLDiscountCodeNonApplicableError $value
     * @psalm-param GraphQLDiscountCodeNonApplicableError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLDiscountCodeNonApplicableErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLDiscountCodeNonApplicableError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLDiscountCodeNonApplicableError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLDiscountCodeNonApplicableError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLDiscountCodeNonApplicableError $data */
                $data = GraphQLDiscountCodeNonApplicableErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
