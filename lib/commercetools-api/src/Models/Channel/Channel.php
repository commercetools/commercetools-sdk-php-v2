<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Review\ReviewRatingStatistics;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface Channel extends LoggedResource
{
    const FIELD_KEY = 'key';
    const FIELD_ROLES = 'roles';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ADDRESS = 'address';
    const FIELD_REVIEW_RATING_STATISTICS = 'reviewRatingStatistics';
    const FIELD_CUSTOM = 'custom';
    const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|array
     */
    public function getRoles();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|Address
     */
    public function getAddress();

    /**
     * @return null|ReviewRatingStatistics
     */
    public function getReviewRatingStatistics();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|GeoJson
     */
    public function getGeoLocation();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setKey(?string $key): void;

    public function setRoles(?array $roles): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setAddress(?Address $address): void;

    public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void;

    public function setCustom(?CustomFields $custom): void;

    public function setGeoLocation(?GeoJson $geoLocation): void;
}
