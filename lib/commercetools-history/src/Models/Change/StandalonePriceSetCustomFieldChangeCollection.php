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
 * @extends ChangeCollection<StandalonePriceSetCustomFieldChange>
 * @method StandalonePriceSetCustomFieldChange current()
 * @method StandalonePriceSetCustomFieldChange end()
 * @method StandalonePriceSetCustomFieldChange at($offset)
 */
class StandalonePriceSetCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert StandalonePriceSetCustomFieldChange $value
     * @psalm-param StandalonePriceSetCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetCustomFieldChange $data */
                $data = StandalonePriceSetCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
