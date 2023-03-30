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
 * @extends GraphQLErrorObjectCollection<GraphQLInsufficientScopeError>
 * @method GraphQLInsufficientScopeError current()
 * @method GraphQLInsufficientScopeError end()
 * @method GraphQLInsufficientScopeError at($offset)
 */
class GraphQLInsufficientScopeErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInsufficientScopeError $value
     * @psalm-param GraphQLInsufficientScopeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInsufficientScopeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInsufficientScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInsufficientScopeError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInsufficientScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInsufficientScopeError $data */
                $data = GraphQLInsufficientScopeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
