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
 * @extends ExtensionUpdateActionCollection<ExtensionSetAdditionalContextAction>
 * @method ExtensionSetAdditionalContextAction current()
 * @method ExtensionSetAdditionalContextAction end()
 * @method ExtensionSetAdditionalContextAction at($offset)
 */
class ExtensionSetAdditionalContextActionCollection extends ExtensionUpdateActionCollection
{
    /**
     * @psalm-assert ExtensionSetAdditionalContextAction $value
     * @psalm-param ExtensionSetAdditionalContextAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionSetAdditionalContextActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionSetAdditionalContextAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionSetAdditionalContextAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionSetAdditionalContextAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionSetAdditionalContextAction $data */
                $data = ExtensionSetAdditionalContextActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
