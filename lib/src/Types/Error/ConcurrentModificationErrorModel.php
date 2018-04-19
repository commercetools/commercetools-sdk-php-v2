<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Error\ErrorObjectModel;

class ConcurrentModificationErrorModel extends ErrorObjectModel implements ConcurrentModificationError
{
    const DISCRIMINATOR_VALUE = 'ConcurrentModification';

    /**
     * @var int
     */
    protected $currentVersion;

    /**
     * @return int
     */
    public function getCurrentVersion()
    {
        if (is_null($this->currentVersion)) {
            $value = $this->raw(ConcurrentModificationError::FIELD_CURRENT_VERSION);
            $value = (int)$value;
            $this->currentVersion = $value;
        }
        return $this->currentVersion;
    }

    /**
     * @param int $currentVersion
     * @return $this
     */
    public function setCurrentVersion(int $currentVersion)
    {
        $this->currentVersion = (int)$currentVersion;

        return $this;
    }

}
