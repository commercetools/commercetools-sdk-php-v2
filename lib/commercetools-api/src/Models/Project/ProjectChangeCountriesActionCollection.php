<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProjectChangeCountriesAction>
 * @method ProjectChangeCountriesAction current()
 * @method ProjectChangeCountriesAction at($offset)
 */
class ProjectChangeCountriesActionCollection extends MapperSequence
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
        return function (int $index): ?ProjectChangeCountriesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectChangeCountriesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
