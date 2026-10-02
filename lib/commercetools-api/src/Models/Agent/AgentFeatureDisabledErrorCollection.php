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
 * @extends ErrorObjectCollection<AgentFeatureDisabledError>
 * @method AgentFeatureDisabledError current()
 * @method AgentFeatureDisabledError end()
 * @method AgentFeatureDisabledError at($offset)
 */
class AgentFeatureDisabledErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentFeatureDisabledError $value
     * @psalm-param AgentFeatureDisabledError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentFeatureDisabledErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentFeatureDisabledError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentFeatureDisabledError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentFeatureDisabledError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentFeatureDisabledError $data */
                $data = AgentFeatureDisabledErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
