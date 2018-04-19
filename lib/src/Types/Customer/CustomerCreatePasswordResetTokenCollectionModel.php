<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CustomerCreatePasswordResetTokenCollectionModel extends JsonCollection implements CustomerCreatePasswordResetTokenCollection
{

    /**
     * @param CustomerCreatePasswordResetToken $value
     * @return CustomerCreatePasswordResetTokenCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerCreatePasswordResetToken) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerCreatePasswordResetToken
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerCreatePasswordResetToken) {
            $data = $this->mapData(CustomerCreatePasswordResetToken::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
