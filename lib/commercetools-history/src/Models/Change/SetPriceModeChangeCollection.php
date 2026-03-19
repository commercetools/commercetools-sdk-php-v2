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
 * @extends ChangeCollection<SetPriceModeChange>
 * @method SetPriceModeChange current()
 * @method SetPriceModeChange end()
 * @method SetPriceModeChange at($offset)
 */
class SetPriceModeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetPriceModeChange $value
     * @psalm-param SetPriceModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetPriceModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetPriceModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetPriceModeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetPriceModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetPriceModeChange $data */
                $data = SetPriceModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
