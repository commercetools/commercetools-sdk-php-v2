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
 * @extends ChangeCollection<ChangeLabelChange>
 * @method ChangeLabelChange current()
 * @method ChangeLabelChange end()
 * @method ChangeLabelChange at($offset)
 */
class ChangeLabelChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeLabelChange $value
     * @psalm-param ChangeLabelChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLabelChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLabelChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLabelChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeLabelChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeLabelChange $data */
                $data = ChangeLabelChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
