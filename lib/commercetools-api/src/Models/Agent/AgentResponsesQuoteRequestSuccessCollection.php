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
 * @extends AgentResponsesSuccessCollection<AgentResponsesQuoteRequestSuccess>
 * @method AgentResponsesQuoteRequestSuccess current()
 * @method AgentResponsesQuoteRequestSuccess end()
 * @method AgentResponsesQuoteRequestSuccess at($offset)
 */
class AgentResponsesQuoteRequestSuccessCollection extends AgentResponsesSuccessCollection
{
    /**
     * @psalm-assert AgentResponsesQuoteRequestSuccess $value
     * @psalm-param AgentResponsesQuoteRequestSuccess|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentResponsesQuoteRequestSuccessCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentResponsesQuoteRequestSuccess) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentResponsesQuoteRequestSuccess
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentResponsesQuoteRequestSuccess {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentResponsesQuoteRequestSuccess $data */
                $data = AgentResponsesQuoteRequestSuccessModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
