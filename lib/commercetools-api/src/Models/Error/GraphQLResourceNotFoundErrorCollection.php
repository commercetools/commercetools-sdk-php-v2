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
 * @extends GraphQLErrorObjectCollection<GraphQLResourceNotFoundError>
 * @method GraphQLResourceNotFoundError current()
 * @method GraphQLResourceNotFoundError end()
 * @method GraphQLResourceNotFoundError at($offset)
 */
class GraphQLResourceNotFoundErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLResourceNotFoundError $value
     * @psalm-param GraphQLResourceNotFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLResourceNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLResourceNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLResourceNotFoundError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLResourceNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLResourceNotFoundError $data */
                $data = GraphQLResourceNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
