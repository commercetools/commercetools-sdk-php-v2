<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;

interface ReviewDraft extends JsonObject
{
    const FIELD_KEY = 'key';
    const FIELD_UNIQUENESS_VALUE = 'uniquenessValue';
    const FIELD_LOCALE = 'locale';
    const FIELD_AUTHOR_NAME = 'authorName';
    const FIELD_TITLE = 'title';
    const FIELD_TEXT = 'text';
    const FIELD_TARGET = 'target';
    const FIELD_STATE = 'state';
    const FIELD_RATING = 'rating';
    const FIELD_CUSTOMER = 'customer';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getUniquenessValue();

    /**
     * @return null|string
     */
    public function getLocale();

    /**
     * @return null|string
     */
    public function getAuthorName();

    /**
     * @return null|string
     */
    public function getTitle();

    /**
     * @return null|string
     */
    public function getText();

    /**
     * @return null|JsonObject
     */
    public function getTarget();

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * @return null|int
     */
    public function getRating();

    /**
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    public function setKey(?string $key): void;

    public function setUniquenessValue(?string $uniquenessValue): void;

    public function setLocale(?string $locale): void;

    public function setAuthorName(?string $authorName): void;

    public function setTitle(?string $title): void;

    public function setText(?string $text): void;

    public function setTarget(?JsonObject $target): void;

    public function setState(?StateResourceIdentifier $state): void;

    public function setRating(?int $rating): void;

    public function setCustomer(?CustomerResourceIdentifier $customer): void;

    public function setCustom(?CustomFieldsDraft $custom): void;
}
