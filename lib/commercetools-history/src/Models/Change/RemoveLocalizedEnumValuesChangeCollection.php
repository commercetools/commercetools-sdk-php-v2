<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<RemoveLocalizedEnumValuesChange>
 * @method RemoveLocalizedEnumValuesChange current()
 * @method RemoveLocalizedEnumValuesChange at($offset)
 */
class RemoveLocalizedEnumValuesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveLocalizedEnumValuesChange $value
     * @psalm-param RemoveLocalizedEnumValuesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveLocalizedEnumValuesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveLocalizedEnumValuesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveLocalizedEnumValuesChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveLocalizedEnumValuesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveLocalizedEnumValuesChange $data */
                $data = RemoveLocalizedEnumValuesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
