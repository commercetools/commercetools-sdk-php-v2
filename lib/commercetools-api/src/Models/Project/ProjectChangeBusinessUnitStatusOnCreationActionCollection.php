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
 * @extends ProjectUpdateActionCollection<ProjectChangeBusinessUnitStatusOnCreationAction>
 * @method ProjectChangeBusinessUnitStatusOnCreationAction current()
 * @method ProjectChangeBusinessUnitStatusOnCreationAction end()
 * @method ProjectChangeBusinessUnitStatusOnCreationAction at($offset)
 */
class ProjectChangeBusinessUnitStatusOnCreationActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeBusinessUnitStatusOnCreationAction $value
     * @psalm-param ProjectChangeBusinessUnitStatusOnCreationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeBusinessUnitStatusOnCreationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeBusinessUnitStatusOnCreationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeBusinessUnitStatusOnCreationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeBusinessUnitStatusOnCreationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeBusinessUnitStatusOnCreationAction $data */
                $data = ProjectChangeBusinessUnitStatusOnCreationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
