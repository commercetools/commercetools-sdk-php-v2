<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionChangeTriggersAction>
 * @method ExtensionChangeTriggersAction current()
 * @method ExtensionChangeTriggersAction at($offset)
 */
class ExtensionChangeTriggersActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionChangeTriggersAction $value
     * @psalm-param ExtensionChangeTriggersAction|stdClass $value
     * @return ExtensionChangeTriggersActionCollection
     * @throws InvalidArgumentException
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
        return function(int $index): ?ExtensionChangeTriggersAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionChangeTriggersActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}