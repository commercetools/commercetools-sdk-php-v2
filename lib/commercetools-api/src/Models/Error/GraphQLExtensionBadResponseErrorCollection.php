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
 * @extends GraphQLErrorObjectCollection<GraphQLExtensionBadResponseError>
 * @method GraphQLExtensionBadResponseError current()
 * @method GraphQLExtensionBadResponseError end()
 * @method GraphQLExtensionBadResponseError at($offset)
 */
class GraphQLExtensionBadResponseErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExtensionBadResponseError $value
     * @psalm-param GraphQLExtensionBadResponseError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExtensionBadResponseErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExtensionBadResponseError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExtensionBadResponseError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExtensionBadResponseError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExtensionBadResponseError $data */
                $data = GraphQLExtensionBadResponseErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
