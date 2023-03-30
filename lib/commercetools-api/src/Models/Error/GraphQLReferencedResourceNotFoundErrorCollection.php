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
 * @extends GraphQLErrorObjectCollection<GraphQLReferencedResourceNotFoundError>
 * @method GraphQLReferencedResourceNotFoundError current()
 * @method GraphQLReferencedResourceNotFoundError end()
 * @method GraphQLReferencedResourceNotFoundError at($offset)
 */
class GraphQLReferencedResourceNotFoundErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLReferencedResourceNotFoundError $value
     * @psalm-param GraphQLReferencedResourceNotFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLReferencedResourceNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLReferencedResourceNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLReferencedResourceNotFoundError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLReferencedResourceNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLReferencedResourceNotFoundError $data */
                $data = GraphQLReferencedResourceNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
