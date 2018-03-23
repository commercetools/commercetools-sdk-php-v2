<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Base\JsonObject;

interface CustomerCreateEmailToken extends JsonObject {
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_TTL_MINUTES = 'ttlMinutes';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @return int
     */
    public function getTtlMinutes();

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
     * @param int $ttlMinutes
     * @return $this
     */
    public function setTtlMinutes(int $ttlMinutes);

}
