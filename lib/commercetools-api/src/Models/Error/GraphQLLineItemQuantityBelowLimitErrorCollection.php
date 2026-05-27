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
 * @extends GraphQLErrorObjectCollection<GraphQLLineItemQuantityBelowLimitError>
 * @method GraphQLLineItemQuantityBelowLimitError current()
 * @method GraphQLLineItemQuantityBelowLimitError end()
 * @method GraphQLLineItemQuantityBelowLimitError at($offset)
 */
class GraphQLLineItemQuantityBelowLimitErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLLineItemQuantityBelowLimitError $value
     * @psalm-param GraphQLLineItemQuantityBelowLimitError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLLineItemQuantityBelowLimitErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLLineItemQuantityBelowLimitError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLLineItemQuantityBelowLimitError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLLineItemQuantityBelowLimitError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLLineItemQuantityBelowLimitError $data */
                $data = GraphQLLineItemQuantityBelowLimitErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
