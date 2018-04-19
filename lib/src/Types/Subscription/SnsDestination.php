<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

interface SnsDestination extends Destination
{
    const FIELD_ACCESS_KEY = 'accessKey';
    const FIELD_ACCESS_SECRET = 'accessSecret';
    const FIELD_TOPIC_ARN = 'topicArn';

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
    public function getTopicArn();

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
     * @param string $topicArn
     * @return $this
     */
    public function setTopicArn(string $topicArn);

}
