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
 * @extends ChangeCollection<ChangeInputHintChange>
 * @method ChangeInputHintChange current()
 * @method ChangeInputHintChange at($offset)
 */
class ChangeInputHintChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeInputHintChange $value
     * @psalm-param ChangeInputHintChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeInputHintChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeInputHintChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeInputHintChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeInputHintChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeInputHintChange $data */
                $data = ChangeInputHintChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
