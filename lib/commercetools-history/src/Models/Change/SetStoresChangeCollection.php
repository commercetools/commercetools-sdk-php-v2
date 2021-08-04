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
 * @extends ChangeCollection<SetStoresChange>
 * @method SetStoresChange current()
 * @method SetStoresChange end()
 * @method SetStoresChange at($offset)
 */
class SetStoresChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetStoresChange $value
     * @psalm-param SetStoresChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStoresChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStoresChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStoresChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetStoresChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetStoresChange $data */
                $data = SetStoresChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
