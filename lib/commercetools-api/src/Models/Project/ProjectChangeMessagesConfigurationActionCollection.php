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
 * @extends ProjectUpdateActionCollection<ProjectChangeMessagesConfigurationAction>
 * @method ProjectChangeMessagesConfigurationAction current()
 * @method ProjectChangeMessagesConfigurationAction end()
 * @method ProjectChangeMessagesConfigurationAction at($offset)
 */
class ProjectChangeMessagesConfigurationActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeMessagesConfigurationAction $value
     * @psalm-param ProjectChangeMessagesConfigurationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeMessagesConfigurationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeMessagesConfigurationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeMessagesConfigurationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeMessagesConfigurationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeMessagesConfigurationAction $data */
                $data = ProjectChangeMessagesConfigurationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
