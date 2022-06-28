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
 * @extends ProjectUpdateActionCollection<ProjectChangeShoppingListsConfigurationAction>
 * @method ProjectChangeShoppingListsConfigurationAction current()
 * @method ProjectChangeShoppingListsConfigurationAction end()
 * @method ProjectChangeShoppingListsConfigurationAction at($offset)
 */
class ProjectChangeShoppingListsConfigurationActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeShoppingListsConfigurationAction $value
     * @psalm-param ProjectChangeShoppingListsConfigurationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeShoppingListsConfigurationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeShoppingListsConfigurationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeShoppingListsConfigurationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeShoppingListsConfigurationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeShoppingListsConfigurationAction $data */
                $data = ProjectChangeShoppingListsConfigurationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
