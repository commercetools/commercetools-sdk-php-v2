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
 * @extends ExtensionUpdateActionCollection<ExtensionChangeTriggersAction>
 * @method ExtensionChangeTriggersAction current()
 * @method ExtensionChangeTriggersAction at($offset)
 */
class ExtensionChangeTriggersActionCollection extends ExtensionUpdateActionCollection
{
    /**
     * @psalm-assert ExtensionChangeTriggersAction $value
     * @psalm-param ExtensionChangeTriggersAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionChangeTriggersActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionChangeTriggersAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionChangeTriggersAction
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionChangeTriggersAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionChangeTriggersAction $data */
                $data = ExtensionChangeTriggersActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
