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
 * @extends GraphQLErrorObjectCollection<GraphQLProductAssignmentMissingError>
 * @method GraphQLProductAssignmentMissingError current()
 * @method GraphQLProductAssignmentMissingError end()
 * @method GraphQLProductAssignmentMissingError at($offset)
 */
class GraphQLProductAssignmentMissingErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLProductAssignmentMissingError $value
     * @psalm-param GraphQLProductAssignmentMissingError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLProductAssignmentMissingErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLProductAssignmentMissingError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLProductAssignmentMissingError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLProductAssignmentMissingError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLProductAssignmentMissingError $data */
                $data = GraphQLProductAssignmentMissingErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
