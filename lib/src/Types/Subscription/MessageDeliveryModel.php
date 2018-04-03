<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Subscription\SubscriptionDeliveryModel;

class MessageDeliveryModel extends SubscriptionDeliveryModel implements MessageDelivery {
    const DISCRIMINATOR_VALUE = 'Message';

    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $version;
    /**
     * @var \DateTimeImmutable
     */
    protected $createdAt;
    /**
     * @var \DateTimeImmutable
     */
    protected $lastModifiedAt;
    /**
     * @var int
     */
    protected $sequenceNumber;
    /**
     * @var int
     */
    protected $resourceVersion;

    /**
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(MessageDelivery::FIELD_ID);
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
            $value = $this->raw(MessageDelivery::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            $value = $this->raw(MessageDelivery::FIELD_CREATED_AT);
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
            $value = $this->raw(MessageDelivery::FIELD_LAST_MODIFIED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->lastModifiedAt = $value;
        }
        return $this->lastModifiedAt;
    }
    /**
     * @return int
     */
    public function getSequenceNumber()
    {
        if (is_null($this->sequenceNumber)) {
            $value = $this->raw(MessageDelivery::FIELD_SEQUENCE_NUMBER);
            $value = (int)$value;
            $this->sequenceNumber = $value;
        }
        return $this->sequenceNumber;
    }
    /**
     * @return int
     */
    public function getResourceVersion()
    {
        if (is_null($this->resourceVersion)) {
            $value = $this->raw(MessageDelivery::FIELD_RESOURCE_VERSION);
            $value = (int)$value;
            $this->resourceVersion = $value;
        }
        return $this->resourceVersion;
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
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber(int $sequenceNumber)
    {
        $this->sequenceNumber = (int)$sequenceNumber;

        return $this;
    }
    /**
     * @param int $resourceVersion
     * @return $this
     */
    public function setResourceVersion(int $resourceVersion)
    {
        $this->resourceVersion = (int)$resourceVersion;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[MessageDelivery::FIELD_CREATED_AT]) && $data[MessageDelivery::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[MessageDelivery::FIELD_CREATED_AT] = $data[MessageDelivery::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[MessageDelivery::FIELD_LAST_MODIFIED_AT]) && $data[MessageDelivery::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[MessageDelivery::FIELD_LAST_MODIFIED_AT] = $data[MessageDelivery::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
