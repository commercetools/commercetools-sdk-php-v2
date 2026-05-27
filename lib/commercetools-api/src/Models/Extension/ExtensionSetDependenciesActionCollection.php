<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Extension\ExtensionUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ExtensionUpdateActionCollection<ExtensionSetDependenciesAction>
 * @method ExtensionSetDependenciesAction current()
 * @method ExtensionSetDependenciesAction end()
 * @method ExtensionSetDependenciesAction at($offset)
 */
class ExtensionSetDependenciesActionCollection extends ExtensionUpdateActionCollection
{
    /**
     * @psalm-assert ExtensionSetDependenciesAction $value
     * @psalm-param ExtensionSetDependenciesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionSetDependenciesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionSetDependenciesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionSetDependenciesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionSetDependenciesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionSetDependenciesAction $data */
                $data = ExtensionSetDependenciesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
