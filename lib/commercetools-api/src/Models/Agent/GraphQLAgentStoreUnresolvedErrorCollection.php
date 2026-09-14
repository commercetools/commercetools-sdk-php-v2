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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentStoreUnresolvedError>
 * @method GraphQLAgentStoreUnresolvedError current()
 * @method GraphQLAgentStoreUnresolvedError end()
 * @method GraphQLAgentStoreUnresolvedError at($offset)
 */
class GraphQLAgentStoreUnresolvedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentStoreUnresolvedError $value
     * @psalm-param GraphQLAgentStoreUnresolvedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentStoreUnresolvedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentStoreUnresolvedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentStoreUnresolvedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentStoreUnresolvedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentStoreUnresolvedError $data */
                $data = GraphQLAgentStoreUnresolvedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
