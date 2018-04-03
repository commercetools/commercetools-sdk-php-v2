<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class CustomerCreateEmailTokenModel extends JsonObjectModel implements CustomerCreateEmailToken {
    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $version;
    /**
     * @var int
     */
    protected $ttlMinutes;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(CustomerCreateEmailToken::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            $value = $this->raw(CustomerCreateEmailToken::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
    }
    /**
     * @return int
     */
    public function getTtlMinutes()
    {
        if (is_null($this->ttlMinutes)) {
            $value = $this->raw(CustomerCreateEmailToken::FIELD_TTL_MINUTES);
            $value = (int)$value;
            $this->ttlMinutes = $value;
        }
        return $this->ttlMinutes;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = (string)$id;

        return $this;
    }
    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version)
    {
        $this->version = (int)$version;

        return $this;
    }
    /**
     * @param int $ttlMinutes
     * @return $this
     */
    public function setTtlMinutes(int $ttlMinutes)
    {
        $this->ttlMinutes = (int)$ttlMinutes;

        return $this;
    }

}
