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
 * @extends GraphQLErrorObjectCollection<GraphQLExtensionCircularDependencyError>
 * @method GraphQLExtensionCircularDependencyError current()
 * @method GraphQLExtensionCircularDependencyError end()
 * @method GraphQLExtensionCircularDependencyError at($offset)
 */
class GraphQLExtensionCircularDependencyErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExtensionCircularDependencyError $value
     * @psalm-param GraphQLExtensionCircularDependencyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExtensionCircularDependencyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExtensionCircularDependencyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExtensionCircularDependencyError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExtensionCircularDependencyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExtensionCircularDependencyError $data */
                $data = GraphQLExtensionCircularDependencyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
