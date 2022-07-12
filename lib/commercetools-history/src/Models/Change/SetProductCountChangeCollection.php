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
 * @extends ChangeCollection<SetProductCountChange>
 * @method SetProductCountChange current()
 * @method SetProductCountChange end()
 * @method SetProductCountChange at($offset)
 */
class SetProductCountChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetProductCountChange $value
     * @psalm-param SetProductCountChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetProductCountChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetProductCountChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetProductCountChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetProductCountChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetProductCountChange $data */
                $data = SetProductCountChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
