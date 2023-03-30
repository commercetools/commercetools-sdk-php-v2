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
 * @extends GraphQLErrorObjectCollection<GraphQLDuplicatePriceScopeError>
 * @method GraphQLDuplicatePriceScopeError current()
 * @method GraphQLDuplicatePriceScopeError end()
 * @method GraphQLDuplicatePriceScopeError at($offset)
 */
class GraphQLDuplicatePriceScopeErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLDuplicatePriceScopeError $value
     * @psalm-param GraphQLDuplicatePriceScopeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLDuplicatePriceScopeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLDuplicatePriceScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLDuplicatePriceScopeError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLDuplicatePriceScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLDuplicatePriceScopeError $data */
                $data = GraphQLDuplicatePriceScopeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
