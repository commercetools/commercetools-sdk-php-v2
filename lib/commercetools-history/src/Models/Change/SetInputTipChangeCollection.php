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
 * @extends ChangeCollection<SetInputTipChange>
 * @method SetInputTipChange current()
 * @method SetInputTipChange end()
 * @method SetInputTipChange at($offset)
 */
class SetInputTipChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetInputTipChange $value
     * @psalm-param SetInputTipChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetInputTipChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetInputTipChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetInputTipChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetInputTipChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetInputTipChange $data */
                $data = SetInputTipChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
