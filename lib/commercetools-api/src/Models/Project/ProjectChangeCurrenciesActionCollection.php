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
 * @extends MapperSequence<ProjectChangeCurrenciesAction>
 * @method ProjectChangeCurrenciesAction current()
 * @method ProjectChangeCurrenciesAction at($offset)
 */
class ProjectChangeCurrenciesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProjectChangeCurrenciesAction $value
     * @psalm-param ProjectChangeCurrenciesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeCurrenciesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeCurrenciesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeCurrenciesAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProjectChangeCurrenciesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProjectChangeCurrenciesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
