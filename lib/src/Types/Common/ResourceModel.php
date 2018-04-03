<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class ResourceModel extends JsonObjectModel implements Resource {
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
     * @return string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(Resource::FIELD_ID);
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
            $value = $this->raw(Resource::FIELD_VERSION);
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
            $value = $this->raw(Resource::FIELD_CREATED_AT);
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
            $value = $this->raw(Resource::FIELD_LAST_MODIFIED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->lastModifiedAt = $value;
        }
        return $this->lastModifiedAt;
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


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[Resource::FIELD_CREATED_AT]) && $data[Resource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Resource::FIELD_CREATED_AT] = $data[Resource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[Resource::FIELD_LAST_MODIFIED_AT]) && $data[Resource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Resource::FIELD_LAST_MODIFIED_AT] = $data[Resource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }
}
