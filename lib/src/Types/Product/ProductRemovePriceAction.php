<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductRemovePriceAction extends ProductUpdateAction {
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_STAGED = 'staged';

    /**
     * @return string
     */
    public function getPriceId();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param string $priceId
     * @return $this
     */
    public function setPriceId(string $priceId);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
