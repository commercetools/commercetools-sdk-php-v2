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
 * @extends ChangeCollection<SetProductSelectionsChange>
 * @method SetProductSelectionsChange current()
 * @method SetProductSelectionsChange end()
 * @method SetProductSelectionsChange at($offset)
 */
class SetProductSelectionsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetProductSelectionsChange $value
     * @psalm-param SetProductSelectionsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetProductSelectionsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetProductSelectionsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetProductSelectionsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetProductSelectionsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetProductSelectionsChange $data */
                $data = SetProductSelectionsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
