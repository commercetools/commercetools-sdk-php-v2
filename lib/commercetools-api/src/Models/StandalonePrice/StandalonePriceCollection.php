<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<StandalonePrice>
 * @method StandalonePrice current()
 * @method StandalonePrice end()
 * @method StandalonePrice at($offset)
 */
class StandalonePriceCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert StandalonePrice $value
     * @psalm-param StandalonePrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePrice
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePrice $data */
                $data = StandalonePriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
