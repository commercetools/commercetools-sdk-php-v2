<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\PriceDraft;

interface ProductChangePriceAction extends ProductUpdateAction {
    const FIELD_PRICE = 'price';
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_STAGED = 'staged';

    /**
     * @return PriceDraft
     */
    public function getPrice();

    /**
     * @return string
     */
    public function getPriceId();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param PriceDraft $price
     * @return $this
     */
    public function setPrice(PriceDraft $price);

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
