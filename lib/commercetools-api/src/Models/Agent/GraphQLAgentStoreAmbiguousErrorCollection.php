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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentStoreAmbiguousError>
 * @method GraphQLAgentStoreAmbiguousError current()
 * @method GraphQLAgentStoreAmbiguousError end()
 * @method GraphQLAgentStoreAmbiguousError at($offset)
 */
class GraphQLAgentStoreAmbiguousErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentStoreAmbiguousError $value
     * @psalm-param GraphQLAgentStoreAmbiguousError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentStoreAmbiguousErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentStoreAmbiguousError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentStoreAmbiguousError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentStoreAmbiguousError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentStoreAmbiguousError $data */
                $data = GraphQLAgentStoreAmbiguousErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
