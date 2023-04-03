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
 * @extends GraphQLErrorObjectCollection<GraphQLExtensionNoResponseError>
 * @method GraphQLExtensionNoResponseError current()
 * @method GraphQLExtensionNoResponseError end()
 * @method GraphQLExtensionNoResponseError at($offset)
 */
class GraphQLExtensionNoResponseErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExtensionNoResponseError $value
     * @psalm-param GraphQLExtensionNoResponseError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExtensionNoResponseErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExtensionNoResponseError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExtensionNoResponseError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExtensionNoResponseError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExtensionNoResponseError $data */
                $data = GraphQLExtensionNoResponseErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
