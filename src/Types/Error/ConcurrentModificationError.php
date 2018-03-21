<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

interface ConcurrentModificationError extends ErrorObject {
    const FIELD_CURRENT_VERSION = 'currentVersion';

    /**
     * @return int
     */
    public function getCurrentVersion();

    /**
     * @param int $currentVersion
     * @return $this
     */
    public function setCurrentVersion(int $currentVersion);

}
