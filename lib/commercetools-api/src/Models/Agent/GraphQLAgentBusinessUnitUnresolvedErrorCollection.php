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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentBusinessUnitUnresolvedError>
 * @method GraphQLAgentBusinessUnitUnresolvedError current()
 * @method GraphQLAgentBusinessUnitUnresolvedError end()
 * @method GraphQLAgentBusinessUnitUnresolvedError at($offset)
 */
class GraphQLAgentBusinessUnitUnresolvedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentBusinessUnitUnresolvedError $value
     * @psalm-param GraphQLAgentBusinessUnitUnresolvedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentBusinessUnitUnresolvedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentBusinessUnitUnresolvedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentBusinessUnitUnresolvedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentBusinessUnitUnresolvedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentBusinessUnitUnresolvedError $data */
                $data = GraphQLAgentBusinessUnitUnresolvedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
