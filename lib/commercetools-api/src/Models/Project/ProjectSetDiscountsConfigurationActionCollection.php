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
 * @extends ProjectUpdateActionCollection<ProjectSetDiscountsConfigurationAction>
 * @method ProjectSetDiscountsConfigurationAction current()
 * @method ProjectSetDiscountsConfigurationAction end()
 * @method ProjectSetDiscountsConfigurationAction at($offset)
 */
class ProjectSetDiscountsConfigurationActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectSetDiscountsConfigurationAction $value
     * @psalm-param ProjectSetDiscountsConfigurationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectSetDiscountsConfigurationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectSetDiscountsConfigurationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectSetDiscountsConfigurationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectSetDiscountsConfigurationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectSetDiscountsConfigurationAction $data */
                $data = ProjectSetDiscountsConfigurationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
