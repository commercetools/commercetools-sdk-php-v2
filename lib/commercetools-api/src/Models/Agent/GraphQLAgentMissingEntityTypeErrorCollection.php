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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentMissingEntityTypeError>
 * @method GraphQLAgentMissingEntityTypeError current()
 * @method GraphQLAgentMissingEntityTypeError end()
 * @method GraphQLAgentMissingEntityTypeError at($offset)
 */
class GraphQLAgentMissingEntityTypeErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentMissingEntityTypeError $value
     * @psalm-param GraphQLAgentMissingEntityTypeError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentMissingEntityTypeErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentMissingEntityTypeError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentMissingEntityTypeError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentMissingEntityTypeError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentMissingEntityTypeError $data */
                $data = GraphQLAgentMissingEntityTypeErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
