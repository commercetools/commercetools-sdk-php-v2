<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

interface Resource extends JsonObject {
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

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

}
