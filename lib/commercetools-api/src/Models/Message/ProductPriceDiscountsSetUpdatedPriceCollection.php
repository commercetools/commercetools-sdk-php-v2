<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductPriceDiscountsSetUpdatedPrice>
 * @method ProductPriceDiscountsSetUpdatedPrice current()
 * @method ProductPriceDiscountsSetUpdatedPrice at($offset)
 */
class ProductPriceDiscountsSetUpdatedPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductPriceDiscountsSetUpdatedPrice $value
     * @psalm-param ProductPriceDiscountsSetUpdatedPrice|stdClass $value
     * @return ProductPriceDiscountsSetUpdatedPriceCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceDiscountsSetUpdatedPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceDiscountsSetUpdatedPrice
     */
    protected function mapper()
    {
        return function(int $index): ?ProductPriceDiscountsSetUpdatedPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductPriceDiscountsSetUpdatedPriceModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}