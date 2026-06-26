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
 * @extends ProjectUpdateActionCollection<ProjectSetProductCatalogModelAction>
 * @method ProjectSetProductCatalogModelAction current()
 * @method ProjectSetProductCatalogModelAction end()
 * @method ProjectSetProductCatalogModelAction at($offset)
 */
class ProjectSetProductCatalogModelActionCollection extends ProjectUpdateActionCollection
{
    /**
     * @psalm-assert ProjectSetProductCatalogModelAction $value
     * @psalm-param ProjectSetProductCatalogModelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProjectSetProductCatalogModelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProjectSetProductCatalogModelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProjectSetProductCatalogModelAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProjectSetProductCatalogModelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProjectSetProductCatalogModelAction $data */
                $data = ProjectSetProductCatalogModelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
