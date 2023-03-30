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
 * @extends GraphQLErrorObjectCollection<GraphQLExtensionUpdateActionsFailedError>
 * @method GraphQLExtensionUpdateActionsFailedError current()
 * @method GraphQLExtensionUpdateActionsFailedError end()
 * @method GraphQLExtensionUpdateActionsFailedError at($offset)
 */
class GraphQLExtensionUpdateActionsFailedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExtensionUpdateActionsFailedError $value
     * @psalm-param GraphQLExtensionUpdateActionsFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExtensionUpdateActionsFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExtensionUpdateActionsFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExtensionUpdateActionsFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExtensionUpdateActionsFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExtensionUpdateActionsFailedError $data */
                $data = GraphQLExtensionUpdateActionsFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
