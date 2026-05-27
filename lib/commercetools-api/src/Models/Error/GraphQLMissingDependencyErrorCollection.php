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
 * @extends GraphQLErrorObjectCollection<GraphQLMissingDependencyError>
 * @method GraphQLMissingDependencyError current()
 * @method GraphQLMissingDependencyError end()
 * @method GraphQLMissingDependencyError at($offset)
 */
class GraphQLMissingDependencyErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLMissingDependencyError $value
     * @psalm-param GraphQLMissingDependencyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLMissingDependencyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLMissingDependencyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLMissingDependencyError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLMissingDependencyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLMissingDependencyError $data */
                $data = GraphQLMissingDependencyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
