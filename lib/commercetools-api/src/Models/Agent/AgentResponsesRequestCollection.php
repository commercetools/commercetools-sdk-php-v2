<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AgentResponsesRequest>
 * @method AgentResponsesRequest current()
 * @method AgentResponsesRequest end()
 * @method AgentResponsesRequest at($offset)
 */
class AgentResponsesRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert AgentResponsesRequest $value
     * @psalm-param AgentResponsesRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentResponsesRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentResponsesRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentResponsesRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentResponsesRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentResponsesRequest $data */
                $data = AgentResponsesRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
