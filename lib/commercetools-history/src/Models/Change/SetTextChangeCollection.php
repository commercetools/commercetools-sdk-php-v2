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
 * @extends ChangeCollection<SetTextChange>
 * @method SetTextChange current()
 * @method SetTextChange at($offset)
 */
class SetTextChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetTextChange $value
     * @psalm-param SetTextChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTextChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTextChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTextChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetTextChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetTextChange $data */
                $data = SetTextChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
