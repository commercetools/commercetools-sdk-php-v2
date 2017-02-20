<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscountValueRelative extends ProductDiscountValue {
    protected $permyriad;
    const DISCRIMINATOR_VALUE = 'relative';

    /**
     * @return int
     */
    public function getPermyriad(): int
    {
        if (is_null($this->permyriad)) {
            $value = $this->raw('permyriad');
            if (!is_null($value)) {
                $this->permyriad = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->permyriad;
    }
                
}
