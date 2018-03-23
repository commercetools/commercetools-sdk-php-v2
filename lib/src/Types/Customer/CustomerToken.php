<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObject;

interface CustomerToken extends JsonObject {
    const FIELD_ID = 'id';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    const FIELD_CUSTOMER_ID = 'customerId';
    const FIELD_EXPIRES_AT = 'expiresAt';
    const FIELD_VALUE = 'value';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return \DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return string
     */
    public function getCustomerId();

    /**
     * @return \DateTimeImmutable
     */
    public function getExpiresAt();

    /**
     * @return string
     */
    public function getValue();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

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
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId(string $customerId);

    /**
     * @param \DateTimeImmutable $expiresAt
     * @return $this
     */
    public function setExpiresAt($expiresAt);

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value);

}
