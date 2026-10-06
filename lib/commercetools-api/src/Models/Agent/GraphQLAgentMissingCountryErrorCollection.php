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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentMissingCountryError>
 * @method GraphQLAgentMissingCountryError current()
 * @method GraphQLAgentMissingCountryError end()
 * @method GraphQLAgentMissingCountryError at($offset)
 */
class GraphQLAgentMissingCountryErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentMissingCountryError $value
     * @psalm-param GraphQLAgentMissingCountryError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentMissingCountryErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentMissingCountryError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentMissingCountryError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentMissingCountryError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentMissingCountryError $data */
                $data = GraphQLAgentMissingCountryErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
