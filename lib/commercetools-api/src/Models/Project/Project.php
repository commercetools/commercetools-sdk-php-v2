<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessageConfiguration;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Project extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_COUNTRIES = 'countries';
    public const FIELD_CURRENCIES = 'currencies';
    public const FIELD_LANGUAGES = 'languages';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_TRIAL_UNTIL = 'trialUntil';
    public const FIELD_MESSAGES = 'messages';
    public const FIELD_SHIPPING_RATE_INPUT_TYPE = 'shippingRateInputType';
    public const FIELD_EXTERNAL_O_AUTH = 'externalOAuth';
    public const FIELD_CARTS = 'carts';
    public const FIELD_SEARCH_INDEXING = 'searchIndexing';

    /**
     * <p>The current version of the project.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>The unique key of the project.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The name of the project.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|array
     */
    public function getCountries();

    /**
     * <p>A three-digit currency code as per <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     * @return null|array
     */
    public function getCurrencies();

    /**
     * @return null|array
     */
    public function getLanguages();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>The time is in the format Year-Month <code>YYYY-MM</code>.</p>
     *
     * @return null|string
     */
    public function getTrialUntil();

    /**
     * @return null|MessageConfiguration
     */
    public function getMessages();

    /**
     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType();

    /**
     * @return null|ExternalOAuth
     */
    public function getExternalOAuth();

    /**
     * @return null|CartsConfiguration
     */
    public function getCarts();

    /**
     * @return null|SearchIndexingConfiguration
     */
    public function getSearchIndexing();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?array $countries
     */
    public function setCountries(?array $countries): void;

    /**
     * @param ?array $currencies
     */
    public function setCurrencies(?array $currencies): void;

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?string $trialUntil
     */
    public function setTrialUntil(?string $trialUntil): void;

    /**
     * @param ?MessageConfiguration $messages
     */
    public function setMessages(?MessageConfiguration $messages): void;

    /**
     * @param ?ShippingRateInputType $shippingRateInputType
     */
    public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void;

    /**
     * @param ?ExternalOAuth $externalOAuth
     */
    public function setExternalOAuth(?ExternalOAuth $externalOAuth): void;

    /**
     * @param ?CartsConfiguration $carts
     */
    public function setCarts(?CartsConfiguration $carts): void;

    /**
     * @param ?SearchIndexingConfiguration $searchIndexing
     */
    public function setSearchIndexing(?SearchIndexingConfiguration $searchIndexing): void;
}
