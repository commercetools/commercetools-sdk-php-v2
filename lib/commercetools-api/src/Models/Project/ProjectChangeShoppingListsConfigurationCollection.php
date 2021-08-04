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
 * @extends ProjectUpdateActionCollection<ProjectChangeShoppingListsConfiguration>
 * @method ProjectChangeShoppingListsConfiguration current()
 * @method ProjectChangeShoppingListsConfiguration end()
 * @method ProjectChangeShoppingListsConfiguration at($offset)
 */
class ProjectChangeShoppingListsConfigurationCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeShoppingListsConfiguration $value
     * @psalm-param ProjectChangeShoppingListsConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeShoppingListsConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeShoppingListsConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeShoppingListsConfiguration
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeShoppingListsConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeShoppingListsConfiguration $data */
                $data = ProjectChangeShoppingListsConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
