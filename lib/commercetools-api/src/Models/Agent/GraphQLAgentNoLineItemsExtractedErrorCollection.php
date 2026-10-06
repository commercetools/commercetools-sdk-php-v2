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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentNoLineItemsExtractedError>
 * @method GraphQLAgentNoLineItemsExtractedError current()
 * @method GraphQLAgentNoLineItemsExtractedError end()
 * @method GraphQLAgentNoLineItemsExtractedError at($offset)
 */
class GraphQLAgentNoLineItemsExtractedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentNoLineItemsExtractedError $value
     * @psalm-param GraphQLAgentNoLineItemsExtractedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentNoLineItemsExtractedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentNoLineItemsExtractedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentNoLineItemsExtractedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentNoLineItemsExtractedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentNoLineItemsExtractedError $data */
                $data = GraphQLAgentNoLineItemsExtractedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
