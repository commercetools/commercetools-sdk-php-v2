<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Agent\AgentResponsesSuccessCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends AgentResponsesSuccessCollection<AgentResponsesCartSuccess>
 * @method AgentResponsesCartSuccess current()
 * @method AgentResponsesCartSuccess end()
 * @method AgentResponsesCartSuccess at($offset)
 */
class AgentResponsesCartSuccessCollection extends AgentResponsesSuccessCollection
{
    /**
     * @psalm-assert AgentResponsesCartSuccess $value
     * @psalm-param AgentResponsesCartSuccess|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentResponsesCartSuccessCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentResponsesCartSuccess) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentResponsesCartSuccess
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentResponsesCartSuccess {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentResponsesCartSuccess $data */
                $data = AgentResponsesCartSuccessModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
