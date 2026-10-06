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
 * @extends ErrorObjectCollection<AgentBusinessUnitAmbiguousError>
 * @method AgentBusinessUnitAmbiguousError current()
 * @method AgentBusinessUnitAmbiguousError end()
 * @method AgentBusinessUnitAmbiguousError at($offset)
 */
class AgentBusinessUnitAmbiguousErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentBusinessUnitAmbiguousError $value
     * @psalm-param AgentBusinessUnitAmbiguousError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentBusinessUnitAmbiguousErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentBusinessUnitAmbiguousError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentBusinessUnitAmbiguousError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentBusinessUnitAmbiguousError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentBusinessUnitAmbiguousError $data */
                $data = AgentBusinessUnitAmbiguousErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
