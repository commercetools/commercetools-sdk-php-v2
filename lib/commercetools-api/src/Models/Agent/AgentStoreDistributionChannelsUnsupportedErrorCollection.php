<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<AgentStoreDistributionChannelsUnsupportedError>
 * @method AgentStoreDistributionChannelsUnsupportedError current()
 * @method AgentStoreDistributionChannelsUnsupportedError end()
 * @method AgentStoreDistributionChannelsUnsupportedError at($offset)
 */
class AgentStoreDistributionChannelsUnsupportedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentStoreDistributionChannelsUnsupportedError $value
     * @psalm-param AgentStoreDistributionChannelsUnsupportedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentStoreDistributionChannelsUnsupportedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentStoreDistributionChannelsUnsupportedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentStoreDistributionChannelsUnsupportedError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentStoreDistributionChannelsUnsupportedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentStoreDistributionChannelsUnsupportedError $data */
                $data = AgentStoreDistributionChannelsUnsupportedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
