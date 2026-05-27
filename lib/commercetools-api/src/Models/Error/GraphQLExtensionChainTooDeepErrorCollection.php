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
 * @extends GraphQLErrorObjectCollection<GraphQLExtensionChainTooDeepError>
 * @method GraphQLExtensionChainTooDeepError current()
 * @method GraphQLExtensionChainTooDeepError end()
 * @method GraphQLExtensionChainTooDeepError at($offset)
 */
class GraphQLExtensionChainTooDeepErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExtensionChainTooDeepError $value
     * @psalm-param GraphQLExtensionChainTooDeepError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExtensionChainTooDeepErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExtensionChainTooDeepError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExtensionChainTooDeepError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExtensionChainTooDeepError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExtensionChainTooDeepError $data */
                $data = GraphQLExtensionChainTooDeepErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
