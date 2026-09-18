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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentBusinessUnitLimitExceededError>
 * @method GraphQLAgentBusinessUnitLimitExceededError current()
 * @method GraphQLAgentBusinessUnitLimitExceededError end()
 * @method GraphQLAgentBusinessUnitLimitExceededError at($offset)
 */
class GraphQLAgentBusinessUnitLimitExceededErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentBusinessUnitLimitExceededError $value
     * @psalm-param GraphQLAgentBusinessUnitLimitExceededError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentBusinessUnitLimitExceededErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentBusinessUnitLimitExceededError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentBusinessUnitLimitExceededError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentBusinessUnitLimitExceededError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentBusinessUnitLimitExceededError $data */
                $data = GraphQLAgentBusinessUnitLimitExceededErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
