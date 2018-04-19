<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\DiscountedPrice;

interface ProductSetDiscountedPriceAction extends ProductUpdateAction
{
    const FIELD_DISCOUNTED = 'discounted';
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_STAGED = 'staged';

    /**
     * @return DiscountedPrice
     */
    public function getDiscounted();

    /**
     * @return string
     */
    public function getPriceId();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param DiscountedPrice $discounted
     * @return $this
     */
    public function setDiscounted(DiscountedPrice $discounted);

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
