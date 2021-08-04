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
 * @extends MapperSequence<ExtensionUpdate>
 * @method ExtensionUpdate current()
 * @method ExtensionUpdate end()
 * @method ExtensionUpdate at($offset)
 */
class ExtensionUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionUpdate $value
     * @psalm-param ExtensionUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExtensionUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?ExtensionUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExtensionUpdate $data */
                $data = ExtensionUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
