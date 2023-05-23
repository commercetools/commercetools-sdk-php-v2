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
 * @extends GraphQLErrorObjectCollection<GraphQLAssociateMissingPermissionError>
 * @method GraphQLAssociateMissingPermissionError current()
 * @method GraphQLAssociateMissingPermissionError end()
 * @method GraphQLAssociateMissingPermissionError at($offset)
 */
class GraphQLAssociateMissingPermissionErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAssociateMissingPermissionError $value
     * @psalm-param GraphQLAssociateMissingPermissionError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAssociateMissingPermissionErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAssociateMissingPermissionError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAssociateMissingPermissionError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAssociateMissingPermissionError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAssociateMissingPermissionError $data */
                $data = GraphQLAssociateMissingPermissionErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
