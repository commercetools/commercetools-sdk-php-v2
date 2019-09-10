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
 * @extends MapperSequence<ProductPriceExternalDiscountSetMessagePayload>
 * @method ProductPriceExternalDiscountSetMessagePayload current()
 * @method ProductPriceExternalDiscountSetMessagePayload at($offset)
 */
class ProductPriceExternalDiscountSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductPriceExternalDiscountSetMessagePayload $value
     * @psalm-param ProductPriceExternalDiscountSetMessagePayload|stdClass $value
     * @return ProductPriceExternalDiscountSetMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductPriceExternalDiscountSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPriceExternalDiscountSetMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?ProductPriceExternalDiscountSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductPriceExternalDiscountSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}