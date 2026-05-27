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
 * @extends GraphQLErrorObjectCollection<GraphQLCircularDependencyError>
 * @method GraphQLCircularDependencyError current()
 * @method GraphQLCircularDependencyError end()
 * @method GraphQLCircularDependencyError at($offset)
 */
class GraphQLCircularDependencyErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLCircularDependencyError $value
     * @psalm-param GraphQLCircularDependencyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLCircularDependencyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLCircularDependencyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLCircularDependencyError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLCircularDependencyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLCircularDependencyError $data */
                $data = GraphQLCircularDependencyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
