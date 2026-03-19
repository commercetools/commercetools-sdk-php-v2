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
 * @extends ChangeCollection<ChangeIncludedInStatisticsChange>
 * @method ChangeIncludedInStatisticsChange current()
 * @method ChangeIncludedInStatisticsChange end()
 * @method ChangeIncludedInStatisticsChange at($offset)
 */
class ChangeIncludedInStatisticsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeIncludedInStatisticsChange $value
     * @psalm-param ChangeIncludedInStatisticsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeIncludedInStatisticsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeIncludedInStatisticsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeIncludedInStatisticsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeIncludedInStatisticsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeIncludedInStatisticsChange $data */
                $data = ChangeIncludedInStatisticsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
