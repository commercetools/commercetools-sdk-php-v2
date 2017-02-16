<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ConcurrentModificationError extends ErrorObject {
    protected $currentVersion;
    const DISCRIMINATOR_VALUE = 'ConcurrentModification';

    /**
     * @return int
     */
    public function getCurrentVersion(): int
    {
        if (is_null($this->currentVersion)) {
            $value = $this->raw('currentVersion');
            if (!is_null($value)) {
                $this->currentVersion = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->currentVersion;
    }
                
}
