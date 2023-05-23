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
 * @extends ProjectUpdateActionCollection<ProjectSetBusinessUnitAssociateRoleOnCreationAction>
 * @method ProjectSetBusinessUnitAssociateRoleOnCreationAction current()
 * @method ProjectSetBusinessUnitAssociateRoleOnCreationAction end()
 * @method ProjectSetBusinessUnitAssociateRoleOnCreationAction at($offset)
 */
class ProjectSetBusinessUnitAssociateRoleOnCreationActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectSetBusinessUnitAssociateRoleOnCreationAction $value
     * @psalm-param ProjectSetBusinessUnitAssociateRoleOnCreationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectSetBusinessUnitAssociateRoleOnCreationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectSetBusinessUnitAssociateRoleOnCreationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectSetBusinessUnitAssociateRoleOnCreationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectSetBusinessUnitAssociateRoleOnCreationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectSetBusinessUnitAssociateRoleOnCreationAction $data */
                $data = ProjectSetBusinessUnitAssociateRoleOnCreationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
