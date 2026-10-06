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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentQuoteRequestCreationFailedError>
 * @method GraphQLAgentQuoteRequestCreationFailedError current()
 * @method GraphQLAgentQuoteRequestCreationFailedError end()
 * @method GraphQLAgentQuoteRequestCreationFailedError at($offset)
 */
class GraphQLAgentQuoteRequestCreationFailedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentQuoteRequestCreationFailedError $value
     * @psalm-param GraphQLAgentQuoteRequestCreationFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentQuoteRequestCreationFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentQuoteRequestCreationFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentQuoteRequestCreationFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentQuoteRequestCreationFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentQuoteRequestCreationFailedError $data */
                $data = GraphQLAgentQuoteRequestCreationFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
