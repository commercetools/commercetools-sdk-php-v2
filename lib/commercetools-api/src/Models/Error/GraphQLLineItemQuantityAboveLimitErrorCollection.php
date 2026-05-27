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
 * @extends GraphQLErrorObjectCollection<GraphQLLineItemQuantityAboveLimitError>
 * @method GraphQLLineItemQuantityAboveLimitError current()
 * @method GraphQLLineItemQuantityAboveLimitError end()
 * @method GraphQLLineItemQuantityAboveLimitError at($offset)
 */
class GraphQLLineItemQuantityAboveLimitErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLLineItemQuantityAboveLimitError $value
     * @psalm-param GraphQLLineItemQuantityAboveLimitError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLLineItemQuantityAboveLimitErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLLineItemQuantityAboveLimitError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLLineItemQuantityAboveLimitError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLLineItemQuantityAboveLimitError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLLineItemQuantityAboveLimitError $data */
                $data = GraphQLLineItemQuantityAboveLimitErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
