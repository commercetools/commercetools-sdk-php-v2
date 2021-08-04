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
 * @extends ChangeCollection<SetValidFromChange>
 * @method SetValidFromChange current()
 * @method SetValidFromChange end()
 * @method SetValidFromChange at($offset)
 */
class SetValidFromChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetValidFromChange $value
     * @psalm-param SetValidFromChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetValidFromChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetValidFromChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetValidFromChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetValidFromChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetValidFromChange $data */
                $data = SetValidFromChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
