<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<StandalonePriceResourceIdentifier>
 * @method StandalonePriceResourceIdentifier current()
 * @method StandalonePriceResourceIdentifier end()
 * @method StandalonePriceResourceIdentifier at($offset)
 */
class StandalonePriceResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert StandalonePriceResourceIdentifier $value
     * @psalm-param StandalonePriceResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceResourceIdentifier $data */
                $data = StandalonePriceResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
