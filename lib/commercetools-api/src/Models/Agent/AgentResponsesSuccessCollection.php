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
 * @template T of AgentResponsesSuccess
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method AgentResponsesSuccess current()
 * @method AgentResponsesSuccess end()
 * @method AgentResponsesSuccess at($offset)
 */
class AgentResponsesSuccessCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentResponsesSuccessCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentResponsesSuccess) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentResponsesSuccess {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = AgentResponsesSuccessModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
