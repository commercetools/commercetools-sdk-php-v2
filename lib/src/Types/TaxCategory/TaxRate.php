<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\JsonObject;

interface TaxRate extends JsonObject {
    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_AMOUNT = 'amount';
    const FIELD_INCLUDED_IN_PRICE = 'includedInPrice';
    const FIELD_COUNTRY = 'country';
    const FIELD_STATE = 'state';
    const FIELD_SUB_RATES = 'subRates';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return int
     */
    public function getAmount();

    /**
     * @return mixed
     */
    public function getIncludedInPrice();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return string
     */
    public function getState();

    /**
     * @return SubRateCollection
     */
    public function getSubRates();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param int $amount
     * @return $this
     */
    public function setAmount(int $amount);

    /**
     * @param mixed $includedInPrice
     * @return $this
     */
    public function setIncludedInPrice($includedInPrice);

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country);

    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state);

    /**
     * @param SubRateCollection $subRates
     * @return $this
     */
    public function setSubRates(SubRateCollection $subRates);

}
