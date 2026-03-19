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
 * @extends ChangeCollection<SetMinCartQuantityChange>
 * @method SetMinCartQuantityChange current()
 * @method SetMinCartQuantityChange end()
 * @method SetMinCartQuantityChange at($offset)
 */
class SetMinCartQuantityChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMinCartQuantityChange $value
     * @psalm-param SetMinCartQuantityChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMinCartQuantityChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMinCartQuantityChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMinCartQuantityChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetMinCartQuantityChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMinCartQuantityChange $data */
                $data = SetMinCartQuantityChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
