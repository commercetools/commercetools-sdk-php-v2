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
 * @extends ProjectUpdateActionCollection<ProjectChangeCartsConfigurationAction>
 * @method ProjectChangeCartsConfigurationAction current()
 * @method ProjectChangeCartsConfigurationAction end()
 * @method ProjectChangeCartsConfigurationAction at($offset)
 */
class ProjectChangeCartsConfigurationActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeCartsConfigurationAction $value
     * @psalm-param ProjectChangeCartsConfigurationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeCartsConfigurationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeCartsConfigurationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeCartsConfigurationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeCartsConfigurationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeCartsConfigurationAction $data */
                $data = ProjectChangeCartsConfigurationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
