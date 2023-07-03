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
 * @extends ChangeCollection<ChangeAssociateModeChange>
 * @method ChangeAssociateModeChange current()
 * @method ChangeAssociateModeChange end()
 * @method ChangeAssociateModeChange at($offset)
 */
class ChangeAssociateModeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeAssociateModeChange $value
     * @psalm-param ChangeAssociateModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAssociateModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAssociateModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAssociateModeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeAssociateModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeAssociateModeChange $data */
                $data = ChangeAssociateModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
