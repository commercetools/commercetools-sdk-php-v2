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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentBusinessUnitAmbiguousError>
 * @method GraphQLAgentBusinessUnitAmbiguousError current()
 * @method GraphQLAgentBusinessUnitAmbiguousError end()
 * @method GraphQLAgentBusinessUnitAmbiguousError at($offset)
 */
class GraphQLAgentBusinessUnitAmbiguousErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentBusinessUnitAmbiguousError $value
     * @psalm-param GraphQLAgentBusinessUnitAmbiguousError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentBusinessUnitAmbiguousErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentBusinessUnitAmbiguousError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentBusinessUnitAmbiguousError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentBusinessUnitAmbiguousError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentBusinessUnitAmbiguousError $data */
                $data = GraphQLAgentBusinessUnitAmbiguousErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
