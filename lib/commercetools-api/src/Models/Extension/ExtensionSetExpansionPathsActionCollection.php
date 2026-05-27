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
 * @extends ExtensionUpdateActionCollection<ExtensionSetExpansionPathsAction>
 * @method ExtensionSetExpansionPathsAction current()
 * @method ExtensionSetExpansionPathsAction end()
 * @method ExtensionSetExpansionPathsAction at($offset)
 */
class ExtensionSetExpansionPathsActionCollection extends ExtensionUpdateActionCollection
{
    /**
     * @psalm-assert ExtensionSetExpansionPathsAction $value
     * @psalm-param ExtensionSetExpansionPathsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionSetExpansionPathsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionSetExpansionPathsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionSetExpansionPathsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionSetExpansionPathsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionSetExpansionPathsAction $data */
                $data = ExtensionSetExpansionPathsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
