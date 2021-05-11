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
 * @extends ChangeCollection<SetParcelItemsChange>
 * @method SetParcelItemsChange current()
 * @method SetParcelItemsChange at($offset)
 */
class SetParcelItemsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetParcelItemsChange $value
     * @psalm-param SetParcelItemsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetParcelItemsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetParcelItemsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetParcelItemsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetParcelItemsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetParcelItemsChange $data */
                $data = SetParcelItemsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
