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
 * @extends GraphQLErrorObjectCollection<GraphQLExtensionChainTooWideError>
 * @method GraphQLExtensionChainTooWideError current()
 * @method GraphQLExtensionChainTooWideError end()
 * @method GraphQLExtensionChainTooWideError at($offset)
 */
class GraphQLExtensionChainTooWideErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExtensionChainTooWideError $value
     * @psalm-param GraphQLExtensionChainTooWideError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExtensionChainTooWideErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExtensionChainTooWideError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExtensionChainTooWideError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExtensionChainTooWideError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExtensionChainTooWideError $data */
                $data = GraphQLExtensionChainTooWideErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
