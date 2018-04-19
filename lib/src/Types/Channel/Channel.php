<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Common\GeoJson;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Builder\ChannelUpdateBuilder;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\Common\GeoJsonPoint;
use Commercetools\Types\Common\Address;
use Commercetools\Types\Review\ReviewRatingStatistics;
use Commercetools\Types\Common\Resource;

interface Channel extends Resource
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
     * @return string
     */
    public function getKey();

    /**
     * @return array
     */
    public function getRoles();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return Address
     */
    public function getAddress();

    /**
     * @return ReviewRatingStatistics
     */
    public function getReviewRatingStatistics();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return mixed
     */
    public function getGeoLocation();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address);

    /**
     * @param ReviewRatingStatistics $reviewRatingStatistics
     * @return $this
     */
    public function setReviewRatingStatistics(ReviewRatingStatistics $reviewRatingStatistics);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param mixed $geoLocation
     * @return $this
     */
    public function setGeoLocation($geoLocation);

    /**
     * @return GeoJsonPoint
     */
    public function getGeoLocationAsGeoJsonPoint();

    /**
     * @return GeoJson
     */
    public function getGeoLocationAsGeoJson();

    /**
     * @return ChannelUpdateBuilder
     */
    public function update();
}
