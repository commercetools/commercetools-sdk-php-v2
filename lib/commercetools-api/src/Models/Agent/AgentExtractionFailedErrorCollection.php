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
 * @extends ErrorObjectCollection<AgentExtractionFailedError>
 * @method AgentExtractionFailedError current()
 * @method AgentExtractionFailedError end()
 * @method AgentExtractionFailedError at($offset)
 */
class AgentExtractionFailedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AgentExtractionFailedError $value
     * @psalm-param AgentExtractionFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentExtractionFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentExtractionFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentExtractionFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentExtractionFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentExtractionFailedError $data */
                $data = AgentExtractionFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
