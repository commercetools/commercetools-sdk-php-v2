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
 * @extends GraphQLErrorObjectCollection<GraphQLDuplicateStandalonePriceScopeError>
 * @method GraphQLDuplicateStandalonePriceScopeError current()
 * @method GraphQLDuplicateStandalonePriceScopeError end()
 * @method GraphQLDuplicateStandalonePriceScopeError at($offset)
 */
class GraphQLDuplicateStandalonePriceScopeErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLDuplicateStandalonePriceScopeError $value
     * @psalm-param GraphQLDuplicateStandalonePriceScopeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLDuplicateStandalonePriceScopeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLDuplicateStandalonePriceScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLDuplicateStandalonePriceScopeError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLDuplicateStandalonePriceScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLDuplicateStandalonePriceScopeError $data */
                $data = GraphQLDuplicateStandalonePriceScopeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
