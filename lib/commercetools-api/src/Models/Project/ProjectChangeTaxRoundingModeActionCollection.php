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
 * @extends ProjectUpdateActionCollection<ProjectChangeTaxRoundingModeAction>
 * @method ProjectChangeTaxRoundingModeAction current()
 * @method ProjectChangeTaxRoundingModeAction end()
 * @method ProjectChangeTaxRoundingModeAction at($offset)
 */
class ProjectChangeTaxRoundingModeActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeTaxRoundingModeAction $value
     * @psalm-param ProjectChangeTaxRoundingModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeTaxRoundingModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeTaxRoundingModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeTaxRoundingModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeTaxRoundingModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeTaxRoundingModeAction $data */
                $data = ProjectChangeTaxRoundingModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
