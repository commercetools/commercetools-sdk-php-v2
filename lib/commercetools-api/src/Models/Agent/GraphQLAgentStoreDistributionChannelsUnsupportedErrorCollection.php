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
 * @extends GraphQLErrorObjectCollection<GraphQLAgentStoreDistributionChannelsUnsupportedError>
 * @method GraphQLAgentStoreDistributionChannelsUnsupportedError current()
 * @method GraphQLAgentStoreDistributionChannelsUnsupportedError end()
 * @method GraphQLAgentStoreDistributionChannelsUnsupportedError at($offset)
 */
class GraphQLAgentStoreDistributionChannelsUnsupportedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAgentStoreDistributionChannelsUnsupportedError $value
     * @psalm-param GraphQLAgentStoreDistributionChannelsUnsupportedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAgentStoreDistributionChannelsUnsupportedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAgentStoreDistributionChannelsUnsupportedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAgentStoreDistributionChannelsUnsupportedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAgentStoreDistributionChannelsUnsupportedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAgentStoreDistributionChannelsUnsupportedError $data */
                $data = GraphQLAgentStoreDistributionChannelsUnsupportedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
