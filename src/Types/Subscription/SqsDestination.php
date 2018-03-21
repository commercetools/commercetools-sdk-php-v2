<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

interface SqsDestination extends Destination {
    const FIELD_ACCESS_KEY = 'accessKey';
    const FIELD_ACCESS_SECRET = 'accessSecret';
    const FIELD_QUEUE_URL = 'queueURL';
    const FIELD_REGION = 'region';

    /**
     * @return string
     */
    public function getAccessKey();

    /**
     * @return string
     */
    public function getAccessSecret();

    /**
     * @return string
     */
    public function getQueueURL();

    /**
     * @return string
     */
    public function getRegion();

    /**
     * @param string $accessKey
     * @return $this
     */
    public function setAccessKey(string $accessKey);

    /**
     * @param string $accessSecret
     * @return $this
     */
    public function setAccessSecret(string $accessSecret);

    /**
     * @param string $queueURL
     * @return $this
     */
    public function setQueueURL(string $queueURL);

    /**
     * @param string $region
     * @return $this
     */
    public function setRegion(string $region);

}
