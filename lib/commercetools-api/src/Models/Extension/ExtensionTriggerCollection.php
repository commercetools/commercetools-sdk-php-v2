<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionTrigger>
 * @method ExtensionTrigger current()
 * @method ExtensionTrigger at($offset)
 */
class ExtensionTriggerCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionTrigger $value
     * @psalm-param ExtensionTrigger|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionTriggerCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionTrigger) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionTrigger
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionTrigger {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionTrigger $data */
                $data = ExtensionTriggerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
