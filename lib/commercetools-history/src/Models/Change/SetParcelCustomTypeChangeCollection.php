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
 * @extends ChangeCollection<SetParcelCustomTypeChange>
 * @method SetParcelCustomTypeChange current()
 * @method SetParcelCustomTypeChange end()
 * @method SetParcelCustomTypeChange at($offset)
 */
class SetParcelCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetParcelCustomTypeChange $value
     * @psalm-param SetParcelCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetParcelCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetParcelCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetParcelCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetParcelCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetParcelCustomTypeChange $data */
                $data = SetParcelCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
