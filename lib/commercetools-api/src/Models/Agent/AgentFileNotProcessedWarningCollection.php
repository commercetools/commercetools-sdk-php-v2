<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends WarningObjectCollection<AgentFileNotProcessedWarning>
 * @method AgentFileNotProcessedWarning current()
 * @method AgentFileNotProcessedWarning end()
 * @method AgentFileNotProcessedWarning at($offset)
 */
class AgentFileNotProcessedWarningCollection extends WarningObjectCollection
{
    /**
     * @psalm-assert AgentFileNotProcessedWarning $value
     * @psalm-param AgentFileNotProcessedWarning|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AgentFileNotProcessedWarningCollection
     */
    public function add($value)
    {
        if (!$value instanceof AgentFileNotProcessedWarning) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AgentFileNotProcessedWarning
     */
    protected function mapper()
    {
        return function (?int $index): ?AgentFileNotProcessedWarning {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AgentFileNotProcessedWarning $data */
                $data = AgentFileNotProcessedWarningModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
