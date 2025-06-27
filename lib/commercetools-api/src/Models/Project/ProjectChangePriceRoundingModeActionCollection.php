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
 * @extends ProjectUpdateActionCollection<ProjectChangePriceRoundingModeAction>
 * @method ProjectChangePriceRoundingModeAction current()
 * @method ProjectChangePriceRoundingModeAction end()
 * @method ProjectChangePriceRoundingModeAction at($offset)
 */
class ProjectChangePriceRoundingModeActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangePriceRoundingModeAction $value
     * @psalm-param ProjectChangePriceRoundingModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangePriceRoundingModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangePriceRoundingModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangePriceRoundingModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangePriceRoundingModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangePriceRoundingModeAction $data */
                $data = ProjectChangePriceRoundingModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
