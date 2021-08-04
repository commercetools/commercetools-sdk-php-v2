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
 * @extends ChangeCollection<SetStoreChange>
 * @method SetStoreChange current()
 * @method SetStoreChange at($offset)
 */
class SetStoreChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetStoreChange $value
     * @psalm-param SetStoreChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStoreChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStoreChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStoreChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetStoreChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetStoreChange $data */
                $data = SetStoreChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
