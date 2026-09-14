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
 * @extends ErrorObjectCollection<AgentMissingCountryError>
 * @method AgentMissingCountryError current()
 * @method AgentMissingCountryError end()
 * @method AgentMissingCountryError at($offset)
 */
class AgentMissingCountryErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentMissingCountryError $value
     * @psalm-param AgentMissingCountryError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentMissingCountryErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentMissingCountryError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentMissingCountryError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentMissingCountryError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentMissingCountryError $data */
                $data = AgentMissingCountryErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
