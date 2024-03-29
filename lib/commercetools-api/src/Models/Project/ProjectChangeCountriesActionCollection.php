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
 * @extends ProjectUpdateActionCollection<ProjectChangeCountriesAction>
 * @method ProjectChangeCountriesAction current()
 * @method ProjectChangeCountriesAction end()
 * @method ProjectChangeCountriesAction at($offset)
 */
class ProjectChangeCountriesActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeCountriesAction $value
     * @psalm-param ProjectChangeCountriesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeCountriesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeCountriesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeCountriesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectChangeCountriesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeCountriesAction $data */
                $data = ProjectChangeCountriesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
