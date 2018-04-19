<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class CustomerTokenModel extends JsonObjectModel implements CustomerToken
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var \DateTimeImmutable
     */
    protected $createdAt;
    /**
     * @var \DateTimeImmutable
     */
    protected $lastModifiedAt;
    /**
     * @var string
     */
    protected $customerId;
    /**
     * @var \DateTimeImmutable
     */
    protected $expiresAt;
    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(CustomerToken::FIELD_ID);
            $value = (string)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            $value = $this->raw(CustomerToken::FIELD_CREATED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->createdAt = $value;
        }
        return $this->createdAt;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            $value = $this->raw(CustomerToken::FIELD_LAST_MODIFIED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->lastModifiedAt = $value;
        }
        return $this->lastModifiedAt;
    }
    /**
     * @return string
     */
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            $value = $this->raw(CustomerToken::FIELD_CUSTOMER_ID);
            $value = (string)$value;
            $this->customerId = $value;
        }
        return $this->customerId;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getExpiresAt()
    {
        if (is_null($this->expiresAt)) {
            $value = $this->raw(CustomerToken::FIELD_EXPIRES_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->expiresAt = $value;
        }
        return $this->expiresAt;
    }
    /**
     * @return string
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(CustomerToken::FIELD_VALUE);
            $value = (string)$value;
            $this->value = $value;
        }
        return $this->value;
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
     * @param \DateTimeImmutable|\DateTime|string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        if ($createdAt instanceof \DateTime) {
            $createdAt = \DateTimeImmutable::createFromMutable($createdAt);
        }
        if (!$createdAt instanceof \DateTimeImmutable) {
            $createdAt = new \DateTimeImmutable($createdAt);
        }
        $this->$createdAt = $createdAt;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $lastModifiedAt
     * @return $this
     */
    public function setLastModifiedAt($lastModifiedAt)
    {
        if ($lastModifiedAt instanceof \DateTime) {
            $lastModifiedAt = \DateTimeImmutable::createFromMutable($lastModifiedAt);
        }
        if (!$lastModifiedAt instanceof \DateTimeImmutable) {
            $lastModifiedAt = new \DateTimeImmutable($lastModifiedAt);
        }
        $this->$lastModifiedAt = $lastModifiedAt;

        return $this;
    }
    /**
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId(string $customerId)
    {
        $this->customerId = (string)$customerId;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $expiresAt
     * @return $this
     */
    public function setExpiresAt($expiresAt)
    {
        if ($expiresAt instanceof \DateTime) {
            $expiresAt = \DateTimeImmutable::createFromMutable($expiresAt);
        }
        if (!$expiresAt instanceof \DateTimeImmutable) {
            $expiresAt = new \DateTimeImmutable($expiresAt);
        }
        $this->$expiresAt = $expiresAt;

        return $this;
    }
    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->value = (string)$value;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[CustomerToken::FIELD_CREATED_AT]) && $data[CustomerToken::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[CustomerToken::FIELD_CREATED_AT] = $data[CustomerToken::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[CustomerToken::FIELD_LAST_MODIFIED_AT]) && $data[CustomerToken::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[CustomerToken::FIELD_LAST_MODIFIED_AT] = $data[CustomerToken::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[CustomerToken::FIELD_EXPIRES_AT]) && $data[CustomerToken::FIELD_EXPIRES_AT] instanceof \DateTimeImmutable) {
            $data[CustomerToken::FIELD_EXPIRES_AT] = $data[CustomerToken::FIELD_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
