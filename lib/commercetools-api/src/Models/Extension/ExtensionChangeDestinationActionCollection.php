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
 * @extends ExtensionUpdateActionCollection<ExtensionChangeDestinationAction>
 * @method ExtensionChangeDestinationAction current()
 * @method ExtensionChangeDestinationAction end()
 * @method ExtensionChangeDestinationAction at($offset)
 */
class ExtensionChangeDestinationActionCollection extends ExtensionUpdateActionCollection
{
    /**
     * @psalm-assert ExtensionChangeDestinationAction $value
     * @psalm-param ExtensionChangeDestinationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionChangeDestinationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionChangeDestinationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionChangeDestinationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionChangeDestinationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionChangeDestinationAction $data */
                $data = ExtensionChangeDestinationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
