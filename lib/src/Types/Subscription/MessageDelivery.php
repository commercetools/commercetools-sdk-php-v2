<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

interface MessageDelivery extends SubscriptionDelivery
{
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    const FIELD_RESOURCE_VERSION = 'resourceVersion';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return \DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return int
     */
    public function getSequenceNumber();

    /**
     * @return int
     */
    public function getResourceVersion();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

    /**
     * @param \DateTimeImmutable $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * @param \DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function setLastModifiedAt($lastModifiedAt);

    /**
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber(int $sequenceNumber);

    /**
     * @param int $resourceVersion
     * @return $this
     */
    public function setResourceVersion(int $resourceVersion);

}
