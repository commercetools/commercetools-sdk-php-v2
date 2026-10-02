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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentExtractionFailedError>
 * @method GraphQLAgentExtractionFailedError current()
 * @method GraphQLAgentExtractionFailedError end()
 * @method GraphQLAgentExtractionFailedError at($offset)
 */
class GraphQLAgentExtractionFailedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentExtractionFailedError $value
     * @psalm-param GraphQLAgentExtractionFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentExtractionFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentExtractionFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentExtractionFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentExtractionFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentExtractionFailedError $data */
                $data = GraphQLAgentExtractionFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
