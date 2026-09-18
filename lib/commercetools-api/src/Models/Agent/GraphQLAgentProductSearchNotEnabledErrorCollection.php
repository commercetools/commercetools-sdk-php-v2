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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentProductSearchNotEnabledError>
 * @method GraphQLAgentProductSearchNotEnabledError current()
 * @method GraphQLAgentProductSearchNotEnabledError end()
 * @method GraphQLAgentProductSearchNotEnabledError at($offset)
 */
class GraphQLAgentProductSearchNotEnabledErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentProductSearchNotEnabledError $value
     * @psalm-param GraphQLAgentProductSearchNotEnabledError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentProductSearchNotEnabledErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentProductSearchNotEnabledError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentProductSearchNotEnabledError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentProductSearchNotEnabledError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentProductSearchNotEnabledError $data */
                $data = GraphQLAgentProductSearchNotEnabledErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
