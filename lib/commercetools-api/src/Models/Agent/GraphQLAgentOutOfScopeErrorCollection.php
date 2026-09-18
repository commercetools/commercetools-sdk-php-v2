<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\GraphQLErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GraphQLErrorObjectCollection<GraphQLAgentOutOfScopeError>
 * @method GraphQLAgentOutOfScopeError current()
 * @method GraphQLAgentOutOfScopeError end()
 * @method GraphQLAgentOutOfScopeError at($offset)
 */
class GraphQLAgentOutOfScopeErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentOutOfScopeError $value
     * @psalm-param GraphQLAgentOutOfScopeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentOutOfScopeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentOutOfScopeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentOutOfScopeError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentOutOfScopeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentOutOfScopeError $data */
                $data = GraphQLAgentOutOfScopeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
