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
 * @extends ProjectUpdateActionCollection<ProjectChangeCountryTaxRateFallbackEnabledAction>
 * @method ProjectChangeCountryTaxRateFallbackEnabledAction current()
 * @method ProjectChangeCountryTaxRateFallbackEnabledAction at($offset)
 */
class ProjectChangeCountryTaxRateFallbackEnabledActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectChangeCountryTaxRateFallbackEnabledAction $value
     * @psalm-param ProjectChangeCountryTaxRateFallbackEnabledAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectChangeCountryTaxRateFallbackEnabledActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectChangeCountryTaxRateFallbackEnabledAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectChangeCountryTaxRateFallbackEnabledAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProjectChangeCountryTaxRateFallbackEnabledAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectChangeCountryTaxRateFallbackEnabledAction $data */
                $data = ProjectChangeCountryTaxRateFallbackEnabledActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
