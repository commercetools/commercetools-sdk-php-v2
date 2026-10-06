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
 * @extends ErrorObjectCollection<AgentBusinessUnitUnresolvedError>
 * @method AgentBusinessUnitUnresolvedError current()
 * @method AgentBusinessUnitUnresolvedError end()
 * @method AgentBusinessUnitUnresolvedError at($offset)
 */
class AgentBusinessUnitUnresolvedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentBusinessUnitUnresolvedError $value
     * @psalm-param AgentBusinessUnitUnresolvedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentBusinessUnitUnresolvedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentBusinessUnitUnresolvedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentBusinessUnitUnresolvedError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentBusinessUnitUnresolvedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentBusinessUnitUnresolvedError $data */
                $data = AgentBusinessUnitUnresolvedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
