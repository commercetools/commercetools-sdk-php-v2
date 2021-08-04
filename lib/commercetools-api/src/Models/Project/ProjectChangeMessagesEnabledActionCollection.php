<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Project\ProjectUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProjectUpdateActionCollection<ProjectChangeMessagesEnabledAction>
 * @method ProjectChangeMessagesEnabledAction current()
 * @method ProjectChangeMessagesEnabledAction at($offset)
 */
class ProjectChangeMessagesEnabledActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeMessagesEnabledAction $value
     * @psalm-param ProjectChangeMessagesEnabledAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeMessagesEnabledActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeMessagesEnabledAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeMessagesEnabledAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeMessagesEnabledAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeMessagesEnabledAction $data */
                $data = ProjectChangeMessagesEnabledActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
