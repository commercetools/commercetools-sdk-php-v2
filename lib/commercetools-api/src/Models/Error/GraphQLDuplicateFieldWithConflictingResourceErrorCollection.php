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
 * @extends GraphQLErrorObjectCollection<GraphQLDuplicateFieldWithConflictingResourceError>
 * @method GraphQLDuplicateFieldWithConflictingResourceError current()
 * @method GraphQLDuplicateFieldWithConflictingResourceError end()
 * @method GraphQLDuplicateFieldWithConflictingResourceError at($offset)
 */
class GraphQLDuplicateFieldWithConflictingResourceErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLDuplicateFieldWithConflictingResourceError $value
     * @psalm-param GraphQLDuplicateFieldWithConflictingResourceError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLDuplicateFieldWithConflictingResourceErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLDuplicateFieldWithConflictingResourceError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLDuplicateFieldWithConflictingResourceError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLDuplicateFieldWithConflictingResourceError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLDuplicateFieldWithConflictingResourceError $data */
                $data = GraphQLDuplicateFieldWithConflictingResourceErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
