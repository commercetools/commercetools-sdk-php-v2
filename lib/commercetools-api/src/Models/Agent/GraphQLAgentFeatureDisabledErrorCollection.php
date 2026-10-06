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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentFeatureDisabledError>
 * @method GraphQLAgentFeatureDisabledError current()
 * @method GraphQLAgentFeatureDisabledError end()
 * @method GraphQLAgentFeatureDisabledError at($offset)
 */
class GraphQLAgentFeatureDisabledErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentFeatureDisabledError $value
     * @psalm-param GraphQLAgentFeatureDisabledError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentFeatureDisabledErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentFeatureDisabledError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentFeatureDisabledError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentFeatureDisabledError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentFeatureDisabledError $data */
                $data = GraphQLAgentFeatureDisabledErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
