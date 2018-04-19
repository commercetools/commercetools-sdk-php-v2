<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class CustomerCreatePasswordResetTokenModel extends JsonObjectModel implements CustomerCreatePasswordResetToken
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @return string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            $value = $this->raw(CustomerCreatePasswordResetToken::FIELD_EMAIL);
            $value = (string)$value;
            $this->email = $value;
        }
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = (string)$email;

        return $this;
    }

}
