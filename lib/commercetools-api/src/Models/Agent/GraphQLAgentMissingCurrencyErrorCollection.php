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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentMissingCurrencyError>
 * @method GraphQLAgentMissingCurrencyError current()
 * @method GraphQLAgentMissingCurrencyError end()
 * @method GraphQLAgentMissingCurrencyError at($offset)
 */
class GraphQLAgentMissingCurrencyErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentMissingCurrencyError $value
     * @psalm-param GraphQLAgentMissingCurrencyError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentMissingCurrencyErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentMissingCurrencyError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentMissingCurrencyError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentMissingCurrencyError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentMissingCurrencyError $data */
                $data = GraphQLAgentMissingCurrencyErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
