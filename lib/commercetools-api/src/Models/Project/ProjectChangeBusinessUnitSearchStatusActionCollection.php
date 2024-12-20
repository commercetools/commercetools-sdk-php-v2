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
 * @extends ProjectUpdateActionCollection<ProjectChangeBusinessUnitSearchStatusAction>
 * @method ProjectChangeBusinessUnitSearchStatusAction current()
 * @method ProjectChangeBusinessUnitSearchStatusAction end()
 * @method ProjectChangeBusinessUnitSearchStatusAction at($offset)
 */
class ProjectChangeBusinessUnitSearchStatusActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeBusinessUnitSearchStatusAction $value
     * @psalm-param ProjectChangeBusinessUnitSearchStatusAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeBusinessUnitSearchStatusActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeBusinessUnitSearchStatusAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeBusinessUnitSearchStatusAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeBusinessUnitSearchStatusAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeBusinessUnitSearchStatusAction $data */
                $data = ProjectChangeBusinessUnitSearchStatusActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
