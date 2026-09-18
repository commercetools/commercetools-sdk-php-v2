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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentMissingCustomerEmailError>
 * @method GraphQLAgentMissingCustomerEmailError current()
 * @method GraphQLAgentMissingCustomerEmailError end()
 * @method GraphQLAgentMissingCustomerEmailError at($offset)
 */
class GraphQLAgentMissingCustomerEmailErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentMissingCustomerEmailError $value
     * @psalm-param GraphQLAgentMissingCustomerEmailError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentMissingCustomerEmailErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentMissingCustomerEmailError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentMissingCustomerEmailError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentMissingCustomerEmailError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentMissingCustomerEmailError $data */
                $data = GraphQLAgentMissingCustomerEmailErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
